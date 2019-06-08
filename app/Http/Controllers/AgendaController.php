<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditee;
use App\Auditor;
use App\Contractor;
use App\Department;
use App\Site;
use App\Agenda;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            $user = session('user');
            // dd($user);
            if($user){
                return $next($request);
            }else{
                return redirect('/')->with('error', 'You are not allowed');
            }
        });
    }

    public function index()
    {
        $data['agendas'] = Agenda::all();
        return view('pages.agenda', $data);
    }

    public function create()
    {
        $data['audis'] = Auditee::all();
        $data['auds'] = Auditor::all();
        $data['conts'] = Contractor::all();
        $data['depts'] = Department::all();
        $data['sites'] = Site::all();
        return view('pages.createagenda', $data);
    }

    public function store(Request $request)
    {
        $data = $request->input();
        $agenda = new Agenda;

        $agenda->proposer = $request->session()->get('user')->name;
        $agenda->depcont = $data['depcont'];
        $agenda->site = $data['site'];
        $agenda->scope = $data['scope'];
        $agenda->auditee = $data['auditee'];
        $audi = '';
        $count = count($data['auditor']);
        foreach($data['auditor'] as $auditor){
            $audi .= $auditor;
            if($count > 1){
                $audi .= ', ';
            }
            $count -= 1;
        }
        $agenda->auditor = $audi;
        $agenda->from = $data['from'];
        $agenda->to = $data['to'];
        $agenda->approver = $data['approver'];

        $agenda->save();

        $agendas = Agenda::all();
        
        return redirect('/agenda')->with('success', 'New Agenda has been proposed');
    }
    //
}
