<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKeterampilan extends Model
{
    protected $fillable = [
        'praktik_1', 
        'praktik_2', 
        'praktik_3', 
        'praktik_4', 
        'praktik_5',
        'produk',
        'proyek',
        'kode_kd',
        'nis',
        'kode_mapel',
        'kode_ta',
    ];

    public function kd()
    {
        return $this->belongsTo('App\Kd', 'kode_kd');
    }
}
