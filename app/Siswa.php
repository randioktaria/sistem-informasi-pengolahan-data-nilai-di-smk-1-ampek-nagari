<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis', 
        'nama', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat', 
        'email', 
        'no_hp', 
        'kode_kelas',
        'foto'
    ];

    protected $primaryKey = 'nis';
    protected $keyType = 'string';
    
    public $incrementing = 'false';

    public function kelas() 
    {
        return $this->belongsTo('App\Kelas', 'kode_kelas');
    }   
}