<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencanaController extends Controller
{
    public function submitRencana(Request $request)
    {
        dd($request);
    }

    public function index()
    {
        return view('pages.rencana');
    }
}
