<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kd extends Model
{
    protected $fillable = [
        'no_kd', 'nama_kd', 'kode_guru', 'kode_mapel',
    ];

    protected $primaryKey = 'kode_kd';

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'kode_guru');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'kode_mapel');
    }
}
