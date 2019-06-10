<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contractor;
use App\Department;
use App\Site;
use App\User;
use App\Plor;

class PlorController extends Controller
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
        $data['plors'] = Plor::orderBy('id', 'asc')->paginate(5);
        return view('pages.plor', $data);
    }

    public function monitor()
    {
        $data['plors'] = Plor::where('status1', '=', 'Approved')->orderBy('id', 'asc')->paginate(5);
        return view('pages.monitoring', $data);
    }
    
    public function create()
    {
        if(session()->get('user')->status == 'Audit Supervisor' || session()->get('user')->status == 'Audit Superintendent'){
            $data['auds'] = User::where('status', '=', 'Audit Supervisor')->orWhere('status', '=', 'Audit Superintendent')->orWhere('status', '=', 'Audit Manager')->orWhere('status', '=', 'Auditor')->orderBy('name')->get();
            $data['conts'] = Contractor::all();
            $data['depts'] = Department::all();
            $data['sites'] = Site::all();
            $data['cats'] = Category::all();
            $data['apps'] = User::where('name', '=', 'Ezra Boron')
                            ->orWhere('name', '=', 'Andhi H')
                            ->orWhere('name', '=', 'Suhendrawan')
                            ->orWhere('name', '=', 'Luhut Lumban Raja')
                            ->orWhere('name', '=', 'Anisa Nanhidayah')
                            ->orderBy('name')->get();

            return view('pages.createplor',  $data);
        }else return redirect('/dashboard')->with('error', 'You are not allowed');
    }

    public function store(Request $request)
    {
        $plor = new Plor;
        $fields = $request->only($plor->getFirst());
        $plor->proposer = $request->session()->get('user')->name;
        $plor->fill($fields);
        $audi = '';
        $count = count($request->input('auditor'));
        foreach($request->input('auditor') as $auditor){
            $audi .= $auditor;
            if($count > 1){
                $audi .= ', ';
            }
            $count -= 1;
        }
        $plor->auditor = $audi;
        $plor->status1 = 'in Lead Auditor';
        // dd($plor);
        $plor->save();

        return redirect('/plor')->with('success', 'New Plor has been proposed, waiting approval from Lead Auditor');
    }

    public function approve($id)
    {
        // dd($approver);
        $plor = Plor::find($id);
        $plor->status1 = 'Approved';
        $plor->save();
        return redirect('/plor')->with('success', 'Status Change success, PLOR has been Approved');
        //
    }
    //
}
