<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeProfessionalQualification extends Model
{
    protected $table = 'resume_professional_qualification';

    protected $fillable = [
        'user_id',
        'certificate_name',
        'institute_name',
        'location',
        'certification_period'
    ];
}
