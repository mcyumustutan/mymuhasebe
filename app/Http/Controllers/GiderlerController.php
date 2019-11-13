<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiderlerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste()
    {
        return view('Giderler.liste');
    }
}
