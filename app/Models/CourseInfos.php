<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfos extends Model
{
    public $fillable = ['courseID','courseName', 'faculty', 'details'];
    use HasFactory;
}
