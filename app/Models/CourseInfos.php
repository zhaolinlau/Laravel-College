<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfos extends Model
{
    public $table = 'courseinfo';

    public $fillable = ['campus',
                        'mode', 
                        'levelofstudy', 
                        'programme1', 
                        'faculty1',
                        'programme2', 
                        'faculty2',
                        'programme3', 
                        'faculty3'];
    use HasFactory;
}
