<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUjian extends Model
{
    protected $fillable = [
        'uts', 
        'uas', 
        'ket', 
        'nis', 
        'kode_mapel', 
        'kode_ta',
    ];
}
