<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'reference';
    protected $fillable = [
        'user_id',
        'ref_name',
        'ref_organization',
        'ref_designation',
        'mobile',
        'ref_email',
        'ref_relation',
        'ref_address'
    ];
}
