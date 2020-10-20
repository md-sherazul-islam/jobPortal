<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeAddressDetail extends Model
{
    protected $table = 'resume_address_details';
    protected $fillable = [
        'user_id',
        'present_district',
        'present_policeStation',
        'present_postOffice',
        'present_address',

        'permanent_district',
        'permanent_policeStation',
        'permanent_postOffice',
        'permanent_address',
    ];
}
