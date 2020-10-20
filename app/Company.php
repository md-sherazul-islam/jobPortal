<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'companys';
    protected $guard = 'company';
    protected $fillable = [
        'company_name', 
        'company_email', 
        'password',
        'company_country',
        'company_district',
        'company_policeStation',
        'company_address',
        'company_type',
        'company_description',
        'company_tradeLicense',
        'company_websiteUrl',
        'company_logo',
        'company_contactPersonName',
        'company_contactPersonDesignation',
        'company_contactPersonEmail',
        'company_contactPersonPhone',
        'approved',
        'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
