<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trusted extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'image2',
    ];
    use HasFactory;
}
