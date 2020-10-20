<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageProficiency extends Model
{
    protected $table = 'language_proficiency';

    protected $fillable = [
        'user_id',
        'language',
        'reading',
        'writing',
        'speaking'
    ];
}
