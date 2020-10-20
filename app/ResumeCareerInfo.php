<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeCareerInfo extends Model
{
    protected $table = 'resume_career_info';

    protected $fillable = [
        'user_id',
        'objective',
        'present_salary',
        'expected_salary',
        'looking_for',
        'available_for'
    ];
}
