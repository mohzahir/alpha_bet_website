<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'client_id',
        'name',
        'name_ar',
        'start_date',
        'finish_date',
        'location',
        'location_ar',
        'short_descr',
        'short_descr_ar',
        'descr',
        'descr_ar',
        'is_featured',
        'status',
        'photo',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
