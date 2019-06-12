<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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

    // Untuk menampilkan halaman awal
    public function index()
    {
        return view('pages.home');
    }
    //
}
