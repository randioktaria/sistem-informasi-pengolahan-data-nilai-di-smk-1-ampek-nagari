<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ta extends Model
{
    protected $fillable = [
        'kode_ta', 'ta',
    ];

    protected $primaryKey = 'kode_ta';
}
