<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Campi fillable
    protected $fillable = [
        'title',
        'description',
        'instructor',
        'duration',
        'price',
        'published',
    ];
}
