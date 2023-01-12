<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    public $table = 'coursedetails';

    public $fillable = ['campus',
                        'mode', 
                        'levelofstudy', 
                        'programme1', 
                        'faculty1',
                        'programme2', 
                        'faculty2',
                        'programme3', 
                        'faculty3'];
}
