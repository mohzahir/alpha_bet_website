<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'job_title',
        'job_title_ar',
        'facebook_link',
        'linkedin_link',
        'twitter_link',
        'status',
        'photo',
    ];
}
