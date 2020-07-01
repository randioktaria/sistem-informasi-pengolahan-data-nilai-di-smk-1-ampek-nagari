<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'kode_guru', 
        'nama', 
        'tempat_lahir',
        'tgl_lahir', 
        'alamat', 
        'email', 
        'no_hp',
        'foto',
    ];

    protected $primaryKey = 'kode_guru';

    public $incrementing = 'false';

    protected $keyType = 'string';

    public function kelas()
    {
        return $this->hasOne('App\Kelas', 'kode_guru');
    }

}
