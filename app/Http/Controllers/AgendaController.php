<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Contractor;
use App\Department;
use App\Site;
use App\User;

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
        $data['audis'] = User::where('status', '=', 'Auditee')->get();
        $data['auds'] = User::where('status', '=', 'Audit Supervisor')->orWhere('status', '=', 'Audit Superintendent')->orWhere('status', '=', 'Audit Manager')->orWhere('status', '=', 'Auditor')->orderBy('name')->get();
        $data['conts'] = Contractor::all();
        $data['depts'] = Department::all();
        $data['sites'] = Site::all();
        $data['apps'] = User::where('status', 'like', '%Kepala%')->orderBy('name')->get();
        // dd($data['auds']);
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
        $audite = '';
        $count = count($data['auditee']);
        foreach($data['auditee'] as $auditee){
            $audite .= $auditee;
            if($count > 1){
                $audite .= ', ';
            }
            $count -= 1;
        }
        $agenda->auditee = $audite;
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
        $agenda->status = 'in Reviewer';

        $agenda->save();
        
        return redirect('/agenda')->with('success', 'New Agenda has been proposed, waiting approval from Audit Manager');
    }

    public function approveAM($id)
    {
        $agenda = Agenda::find($id);
        $agenda->status = 'in General Manager';
        $agenda->save();
        return redirect('/agenda')->with('success', 'Status Change success, waiting approval from Audit General Manager');
        //
    }

    public function approveGM($id)
    {
        $agenda = Agenda::find($id);
        $agenda->status = 'in Approver';
        $agenda->save();
        return redirect('/agenda')->with('success', 'Status Change success, waiting approval from Approver');
        //
    }

    public function approve($id)
    {
        // dd($approver);
        $agenda = Agenda::find($id);
        $agenda->status = 'Approved';
        $agenda->save();
        return redirect('/agenda')->with('success', 'Status Change success, Agenda has been Approved');
        //
    }
    //
}
