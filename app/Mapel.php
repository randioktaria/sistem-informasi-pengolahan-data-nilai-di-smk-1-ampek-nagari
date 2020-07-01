<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = [
        'kode_mapel', 'mapel',
    ];

    protected $primaryKey = 'kode_mapel';

    public $incrementing = 'false';

    protected $keyType = 'string';

}
