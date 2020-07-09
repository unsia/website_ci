<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $table = 'registrants';
    protected $fillable = [
        'user_id',
        'student_number',
        'identity_number',
        'matchname_identity',
        'matchname_certificate',
        'religion',
        'nationality',
    ];
}
