<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseDetails;

class CourseSeeder extends Seeder
{
    
    public function run()
    {
        $courses = [
            [	
                'courseID' => 'BCS1234',
                'courseName' => 'Diploma in Creative Multimedia',
                'faculty' => 'Faculty of Management (FOM)',
                'details' => 'Focuses on nurturing creative mindset and the ability to solve design',
            ] 
            ];

		    foreach ($courses as $key => $course) {
			Course::create($course);
		    }
    }
}
