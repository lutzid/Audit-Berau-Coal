<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // Untuk mengecek apakah user telah terdaftar atau belum, apabila iya akan dialihkan ke halaman utama, sedangkan jika tidak terdaftar maka akan dikembalikan ke halaman awal
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

    // Untuk melakukan logout
    public function logoutUser(Request $request)
    {
        session()->forget('user');
        session()->flush();
        
        return redirect('/');;
    }
    //
}
