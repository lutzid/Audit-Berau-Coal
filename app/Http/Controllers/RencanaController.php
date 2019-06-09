<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rencana;

class RencanaController extends Controller
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
        $data['rencanas'] = Rencana::orderBy('id', 'asc')->paginate(2);
        return view('pages.rencana', $data);
    }

    public function create()
    {
        return view('pages.createrencana');
    }

    public function store(Request $request)
    {
        $rencana = new Rencana;
        $fields = $request->only($rencana->getFillable());
        $rencana->proposer = $request->session()->get('user')->name;
        $rencana->fill($fields);
        $rencana->status = 'in Reviewer';
        $rencana->save();

        return redirect('/rencana')->with('success', 'New Rencana has been proposed, waiting approval from Audit Manager');
    }

    public function approverAM($id)
    {
        $rencana = Rencana::find($id);
        $rencana->status = 'in General Manager';
        $rencana->save();
        return redirect('/rencana')->with('success', 'Status Change success, waiting approval from Audit General Manager');
        //
    }

    public function approverGM($id)
    {
        $rencana = Rencana::find($id);
        $rencana->status = 'Approved';
        $rencana->save();
        return redirect('/rencana')->with('success', 'Status Change success, Rencana has been Approved');
        //
    }
    
}