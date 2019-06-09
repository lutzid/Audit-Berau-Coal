<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contractor;
use App\Department;
use App\Site;
use App\User;

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

    public function submitPlor(Request $request)
    {
        dd($request);
    }
    //
}
