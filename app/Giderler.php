<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Giderler extends Model
{
    protected $table = "giderler";

    //protected $dateFormat = 'Y-m-d H:i:s';
    
    protected $casts = [
        'tarih' => 'datetime:d.m.Y H:m',
    ];
    

    protected $dates = [
        'tarih',
    ];

    public function hesap()
    {
        return $this->hasOne('App\Hesaplar','id','hesap');
    }
    
}
