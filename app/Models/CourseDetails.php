<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    public $table = 'coursedetails';

    public $fillable = ['campus1',
                        'mode1', 
                        'levelofstudy1', 
                        'intake1',
                        'month1',
                        'programme1', 
                        'faculty1',
                        'campus2',
                        'mode2', 
                        'levelofstudy2', 
                        'intake2',
                        'month2',
                        'programme2', 
                        'faculty2',
                        'campus3',
                        'mode3', 
                        'levelofstudy3', 
                        'intake3',
                        'month3',
                        'programme3', 
                        'faculty3'];
}
