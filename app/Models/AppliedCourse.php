<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedCourse extends Model
{
    use HasFactory;

    protected $table = 'applied_courses';

    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'qualification',
        'college',
        'address',
        'image',
        'signature',
        'resume',
        'courseId',
    ];
}
