<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
                'title',
        'price',
            'rating',
            'teacher',
            'job',
            'video',
            'image',
            'image_bg',
    ];
    use HasFactory;
}
