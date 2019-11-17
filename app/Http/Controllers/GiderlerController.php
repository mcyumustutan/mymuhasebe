<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giderler;
use Carbon\Carbon;
use Illuminate\Routing\Route;

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

        return view('Giderler.liste', [
            'giderler' => $giderler->orderBy('tarih','desc')->get()->toArray(),
            'toplam' => $toplam
        ]);
    }

    function ekle()
    {
        $hesaplar = \App\Hesaplar::all();
        return view('Giderler.ekle', [
            'hesaplar' => $hesaplar
        ]);
    }

    function saveGider(Request $req)
    {
        $gider = new Giderler;
        $gider->ad = $req->ad;
        $gider->resmi_ad = $req->resmi_ad;
        $gider->tarih = $req->tarih;
        $gider->tutar = $req->tutar;
        $gider->hesap = $req->hesap;
        $gider->aciklama = $req->aciklama;
        $gider->save();

        return redirect()->route('GiderlerListesi');
    }

    function deleteGider(Request $req)
    {
        $gider = new Giderler;
        $silinecek = $gider->find($req->gider_id);
        $silinecek->delete();

        return redirect()->route('GiderlerListesi');
    }
}
