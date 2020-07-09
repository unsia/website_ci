<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $fillable = [
        'nama',
        'status',
        'id_provinsi'
    ];
}
