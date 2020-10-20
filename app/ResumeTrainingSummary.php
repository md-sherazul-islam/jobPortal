<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeTrainingSummary extends Model
{
    protected $table = 'resume_training_summary';

    protected $fillable = [
        'user_id',
        'training_title',
        'topics_covered',
        'institute_name',
        'location',
        'country',
        'training_year',
        'duration'
    ];
}
