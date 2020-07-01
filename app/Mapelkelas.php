<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapelkelas extends Model
{
    protected $fillable = [
        'kode_kelas',
        'kode_mapel',
        'kode_guru',
    ];

    protected $primaryKey = 'kode_mapel_kelas';

    public function Mapel()
    {
        return $this->belongsTo('App\Mapel', 'kode_mapel');
    }

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'kode_kelas');
    }

    public function Guru()
    {
        return $this->belongsTo('App\Guru', 'kode_guru');
    }
}
