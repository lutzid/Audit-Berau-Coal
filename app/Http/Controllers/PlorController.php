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
    // Untuk mengecek apakah user telah login atau belum, apabila belum maka user akan dikembalikan ke halaman awal
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

    // Untuk menampilkan halaman plor
    public function index()
    {
        $data['plors'] = Plor::orderBy('id', 'asc')->paginate(5);
        return view('pages.plor', $data);
    }

    // Untuk menampilkan halaman monitoring
    public function monitor()
    {
        $data['plors'] = Plor::where('status1', '=', 'Approved')->orderBy('id', 'asc')->paginate(5);
        $data['open'] = Plor::where('statusFinal', '=', 'Open')->where('status1', '=', 'Approved')->count();
        $data['closed'] = Plor::where('statusFinal', '=', 'Closed')->where('status1', '=', 'Approved')->count();
        // dd($data['open']);
        return view('pages.monitoring', $data);
    }

    // Untuk menampilkan halaman create plor untuk user tertentu, selain user yang ditentukan maka akan dikembalikan ke halaman utama
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

    // Untuk menyimpan data yang telah diisikan di form plor
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
        $dept = Department::where('name', '=', $plor->depcont)->first();
        $cont = Contractor::where('name', '=', $plor->depcont)->first();
        if($dept){
            $plor->type = 1;
        }else if($cont){
            $plor->type = 2;
        }

        $plor->save();

        return redirect('/plor')->with('success', 'New Plor has been proposed, waiting approval from Lead Auditor');
    }

    // Untuk menampilkan halaman edit untuk akun tertentu
    public function viewEdit($id){
        $data['plor'] = Plor::find($id);
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

        return view('pages.editplor', $data);
    }

    // Untuk melakukan edit plor 
    public function edit(Request $request, $id)
    {
        $plor = Plor::find($id);
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
        $dept = Department::where('name', '=', $plor->depcont)->first();
        $cont = Contractor::where('name', '=', $plor->depcont)->first();
        if($dept){
            $plor->type = 1;
        }else if($cont){
            $plor->type = 2;
        }

        $plor->save();

        return redirect('/plor')->with('success', 'Plor has been Edited');
    }

    // Untuk melakukan approve plor yang dilakukan oleh approver
    public function approve($id)
    {
        // dd($approver);
        $plor = Plor::find($id);
        $plor->status1 = 'Approved';
        $plor->save();
        return redirect('/plor')->with('success', 'Status Change success, PLOR has been Approved');
        //
    }

    // Untuk melakukan approve monitoring oleh pjo apabila contractor dan approve oleh depthead apabila department
    public function approvePJO($id)
    {
        // dd($approver);
        $plor = Plor::find($id);
            if($plor->type == 2){
                if(session()->get('user')->username == 'pjo'){
                    $plor->status2 = 'Approved';
                    $plor->save();
                    return redirect('/monitoring')->with('success', 'Status Change success, PLOR has been Approved');
                }
                return redirect('/monitoring')->with('error', 'You are not allowed to approve');
            }
            else if($plor->type == 1){
                if(session()->get('user')->username == 'depthead'){
                    $plor->status2 = 'Approved';
                    $plor->save();
                    return redirect('/monitoring')->with('success', 'Status Change success, PLOR has been Approved');
                }
                return redirect('/monitoring')->with('error', 'You are not allowed to approve');
            }
    }

    // Untuk melakukan approve final oleh auditor pada monitoring 
    public function approveFinal($id)
    {
        // dd($approver);
        $plor = Plor::find($id);
        
        $plor->statusFinal = 'Closed';
        $plor->save();

        return redirect('/monitoring')->with('success', 'Status Change success, PLOR has been Closed');
    }

    // Untuk melakukan pengisian data tambahan monitoring oleh safety apabila contractor dan section head apabila department
    public function fillAuditee($id)
    {
        $data['plor'] = Plor::find($id);
        $plor = Plor::find($id);
        // dd($plor->no_nc);
        if($plor->type == 2){
            if(session()->get('user')->username == 'safety'){
                return view('pages.fillAuditee', $data);
            }
            else{
                return redirect('/monitoring')->with('error', 'You are not allowed to fill');
            }
        }
        else if($plor->type == 1){
            if(session()->get('user')->username == 'secthead'){
                return view('pages.fillAuditee', $data);
            }
            else{
                return redirect('/monitoring')->with('error', 'You are not allowed to fill');
            }
        }
    }

    // Untuk melakukan pengisian data tambahan monitoring oleh safety apabila contractor dan section head apabila department
    public function fillOverdue($id)
    {
        $data['plor'] = Plor::find($id);
        $plor = Plor::find($id);
        // dd($plor->no_nc);
        if($plor->type == 2){
            if(session()->get('user')->username == 'safety'){
                return view('pages.fillOverdue', $data);
            }
            else{
                return redirect('/monitoring')->with('error', 'You are not allowed to fill');
            }
        }
        else if($plor->type == 1){
            if(session()->get('user')->username == 'secthead'){
                return view('pages.fillOverdue', $data);
            }
            else{
                return redirect('/monitoring')->with('error', 'You are not allowed to fill');
            }
        }
    }
}
