<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rencana;

class RencanaController extends Controller
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
    
    // Untuk menampilkan halaman rencana
    public function index()
    {
        $data['rencanas'] = Rencana::orderBy('id', 'asc')->paginate(2);
        return view('pages.rencana', $data);
    }

    // Untuk menampilkan halaman create rencana
    public function create()
    {
        return view('pages.createrencana');
    }

    // Untuk menyimpan data yang telah diisikan di form rencana
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

    // Untuk melakukan approve yang dilakukan oleh Audit Manager
    public function approverAM($id)
    {
        $rencana = Rencana::find($id);
        $rencana->status = 'in General Manager';
        $rencana->save();
        return redirect('/rencana')->with('success', 'Status Change success, waiting approval from Audit General Manager');
        //
    }

    // Untuk melakukan approve yang dilakukan oleh General Manager
    public function approverGM($id)
    {
        $rencana = Rencana::find($id);
        $rencana->status = 'Approved';
        $rencana->save();
        return redirect('/rencana')->with('success', 'Status Change success, Rencana has been Approved');
        //
    }
    
}