<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'kode_guru',
        'kode_kelas',
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kode_kelas');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'kode_guru');
    }
}
