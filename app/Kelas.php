<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'kode_kelas', 'kelas', 'jurusan', 'kode_guru',
    ];

    protected $primaryKey = 'kode_kelas';

    public $incrementing = 'false';

    protected $keyType = 'string';

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'kode_guru');
    }

    public function siswa()
    {
        return $this->hasMany('App\Siswa', 'kode_kelas');
    }

}
