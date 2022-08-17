<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_name_ar',
        'logo',
        'logo_black',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
        'instagram_link',
        'phone1',
        'phone2',
        'email',
        'location',
        'location_ar',
        'google_map_link',
    ];
}
