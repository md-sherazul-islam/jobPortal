<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployementHistory extends Model
{
    protected $table = 'employment_history';

    protected $fillable = [
        'user_id',
        'company_name',
        'company_business',
        'designation',
        'department',
        'responsiblity',
        'company_location',
        'employment_period_from',
        'employment_period_to'
    ];
}
