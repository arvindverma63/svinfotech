<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'details',
        'type',
        'active',
        'exInYear',
        'exInMonth',
    ];
    use HasFactory;
}
