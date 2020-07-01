<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianKarakter extends Model
{
    protected $fillable = [
        'kemandirian', 
        'inisiatif', 
        'kerjasama', 
        'tang_jawab', 
        'kejujuran', 
        'gemar_membaca',
        'menghargai',
        'komunikatif',
        'kepemimpinan',
        'ket',
        'nis',
        'kode_mapel',
    ];
}
