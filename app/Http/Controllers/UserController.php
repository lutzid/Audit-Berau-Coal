<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        $tabelUser = User::where('username',$request->input('login-username'))->first();
        if($tabelUser!=null){
            $request->session()->put('user', $tabelUser);
            return redirect('/dashboard');
        }else{
            return redirect()->back()->with('error', 'You are not registered in this system');   
        }
    }
    //
}
