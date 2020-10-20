<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = 'specialization';

    protected $fillable = [
        'user_id',
        'skill',
        'learned_how',
        'skill_description'
    ];
}
