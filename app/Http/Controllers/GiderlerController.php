<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giderler;
use Carbon\Carbon;

class GiderlerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste()
    {
        $giderler = Giderler::with('hesap')->whereBetween('tarih', [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfDay() 
        ]
        );

        $toplam = $giderler->sum('tutar');

        return view('Giderler.liste',[
            'giderler'=>$giderler->get()->toArray(),
            'toplam'=>$toplam
            ]);
    }
}
