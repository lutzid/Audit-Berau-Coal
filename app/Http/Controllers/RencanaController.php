<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.rencana');
    }

    public function submitRencana(Request $request)
    {
        dd($request);
    }
}
