<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('pages.agenda');
    }

    public function createAgenda()
    {
        return view('pages.createagenda');
    }
    //
}
