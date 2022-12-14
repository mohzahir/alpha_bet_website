<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'short_descr',
        'short_descr_ar',
        'descr',
        'descr_ar',
        'is_featured',
        'status',
        'photo',
    ];

    public function projects()
    {
        return $this->hasMany(project::class);
    }
}
