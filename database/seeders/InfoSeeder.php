<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
			[	'courseID' => 'BCS1234',
				'courseName' => 'Non-Malaysian',
				'faculty' => 'Penang',
				'details' => 'Diploma In Finnace'
			],
			[
				'courseID' => 'BCN2345',
				'courseName' => 'Malaysian',
				'faculty' => 'Cyberjaya',
				'details' => 'Degree in Computer Science (Hons.)'
				
            ],
            [
				'courseID' => 'BCF7021',
				'courseName' => 'Malaysian',
				'faculty' => 'Cyberjaya',
				'details' => 'Degree in Computer Science (Hons.)'
				
			]
		];

		foreach ($courses as $key => $courses) {
			courses::create($courses);
		}
    }
}
