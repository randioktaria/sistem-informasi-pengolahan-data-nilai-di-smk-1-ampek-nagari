<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiPengetahuan extends Model
{
    protected $fillable = [
        'tugas_1', 
        'tugas_2', 
        'tugas_3', 
        'tugas_4',
        'kuis_1',
        'kuis_2',
        'kuis_3',
        'pengamatan',
        'uh',
        'uh_remedial',
        'uts',
        'uas',
        'kode_kd',
        'nis',
        'kode_mapel',
        'kode_ta',
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'nis');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'kode_mapel');
    }
    
    public function ta()
    {
        return $this->belongsTo('App\Mapel', 'kode_ta');
    }

    public function kd()
    {
        return $this->belongsTo('App\Kd', 'kode_kd');
    }
}
