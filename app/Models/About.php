<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'descr',
        'descr_ar',
        'goal',
        'goal_ar',
        'mission',
        'mission_ar',
        'vision',
        'vision_ar',
        'skill1_name',
        'skill1_name_ar',
        'skill1_rate',
        'skill2_name',
        'skill2_name_ar',
        'skill2_rate',
        'skill3_name',
        'skill3_name_ar',
        'skill3_rate',
        'skill4_name',
        'skill4_name_ar',
        'skill4_rate',
        'video_url',
    ];
}
