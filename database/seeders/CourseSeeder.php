<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    
    public function run()
    {
        $courses = [
            [	
                'courseID' => 'CCS1234',
                'courseName' => 'Diploma in Creative Multimedia',
                'faculty' => 'Faculty of Management (FOM)',
                'details' => 'Focuses on nurturing creative mindset and the ability to solve design',
            ],
            [	
                'courseID' => 'FCS2234',
                'courseName' => 'Diploma in Finance',
                'faculty' => 'Faculty of Management (FOM)',
                'details' => 'This programme is designed to empower students with technical and 
                analytical skills in developing solutions for financial and business issues.',
            ],
            [	
                'courseID' => 'SCS1233',
                'courseName' => 'Bachelor of Computer Science (Hons.) ',
                'faculty' => 'Faculty of Computing and Informatics (FCI)',
                'details' => 'All students learn common subjects before specialising in 
                one of the following areas Software Engineering',
            ],
            [	
                'courseID' => 'ICS1232',
                'courseName' => 'Bachelor of Information Technology (Hons.) Information Systems ',
                'faculty' => 'Faculty of Computing and Informatics (FCI)',
                'details' => 'Programme prepares students with a strong foundation in information 
                systems applications development as well as current and emerging technologies related 
                to information systems.',
            ],
            ];

		    foreach ($courses as $key => $course) {
			Course::create($course);
		    }
    }
}
