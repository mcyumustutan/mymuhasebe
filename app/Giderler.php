<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Giderler extends Model
{

     use SoftDeletes;

    protected $table = "giderler";

    //protected $dateFormat = 'Y-m-d H:i:s';

    protected $casts = [
        'tarih' => 'datetime:d.m.Y H:m',
    ];

    protected $fillabale = [
        "tarih","ad",'resmi_ad','hesap','tutar','aciklama'
    ];

    protected $dates = [
        'tarih',
    ];

    public function hesap()
    {
        return $this->hasOne('App\Hesaplar','id','hesap');
    }

}
