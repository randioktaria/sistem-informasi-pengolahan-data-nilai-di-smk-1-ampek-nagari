<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalSikap extends Model
{
    protected $fillable = [
        'catatan_perilaku', 'nilai_utama', 'nis', 'kode_mapel', 'kode_ta'
    ];
}
