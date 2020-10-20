<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumePersonalDetail extends Model
{
    protected $table = 'resume_personal_details';

    protected $fillable = [
        'user_id',
        'father_name',
        'mother_name',
        'religion',
        'marital_status',
        'nationality',
        'national_id_no', 
        'passport_no'
    ];
}
