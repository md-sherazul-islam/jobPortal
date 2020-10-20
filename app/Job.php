<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company_id',
        'job_title',
        'job_category',
        'job_vacancy',
        'job_context',
        'job_description',
        'job_location',
        'job_educationalRequirement',
        'job_salary',
        'job_exprience',
        'job_applicationDeadline',
    ];
}
