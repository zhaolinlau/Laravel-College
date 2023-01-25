<?php

namespace Database\Seeders;
use App\Models\Application;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applications = [
			[	'level' => 'Undergraduate',
				'nationality' => 'Non-Malaysian',
				'campus' => 'Penang',
				'programme1' => 'Diploma In Finnace',
				'programme2' => 'Diploma in Accounting',
				'programme3' => 'Diploma in Information Technology',
				'fullname' => 'Alex Wang',
				'nric' => '1427327481278',
				'phone' => '9071272341',
				'email' => 'alexwang@gmail.com',
				'files' => 'TP.pdf',
                'guardianname' => 'Danial Wang',
				'guardianphone' => '7327481278',
				'guardiannric' => '7627372341',
				'guardianemail' => 'danialwang@gmail.com'
			],
			[
				'level' => 'Postgraduate',
				'nationality' => 'Malaysian',
				'campus' => 'Cyberjaya',
				'programme1' => 'Degree in Computer Science (Hons.)',
				'programme2' => 'Degree in Financial Engineering (Hons.)',
				'programme3' => 'Degree in Information Technology (Hons.) Information System',
				'fullname' => 'Amirol Bin Ahmad',
				'nric' => '950714011273',
				'phone' => '0112632723',
				'email' => 'amirol@gmail.com',
				'files' => 'Laravel.pdf',
                'guardianname' => 'Roslinda Binti Ali',
				'guardianphone' => '700204022782',
				'guardiannric' => '0137372341',
				'guardianemail' => 'roslindaali@gmail.com'
			],
			[
				'level' => 'Undergraduate',
				'nationality' => 'Non-Malaysian',
				'campus' => 'Cyberjaya',
				'programme1' => 'Degree in Information Technology (Hons.) Information System',
				'programme2' => 'Degree in Financial Engineering (Hons.)',
				'programme3' => 'Degree in Computer Science (Hons.)',
				'fullname' => 'Azy Lee',
				'nric' => '980809011273',
				'phone' => '0812676588',
				'email' => 'azylee@gmail.com',
				'files' => 'Azy.pdf',
                'guardianname' => 'Boh Lee',
				'guardianphone' => '75475687782',
				'guardiannric' => '085656743',
				'guardianemail' => 'bohlee@gmail.com'
			],
			[
				'level' => 'Undergraduate',
				'nationality' => 'Malaysian',
				'campus' => 'Penang',
				'programme1' => 'Diploma in Accounting',
				'programme2' => 'Diploma In Finnace',
				'programme3' => 'Diploma in Information Technology',
				'fullname' => 'Amira Binti Azmi',
				'nric' => '990111061278',
				'phone' => '0112658568',
				'email' => 'miraa@gmail.com',
				'files' => 'amira.pdf',
                'guardianname' => 'Azmi Bin Bukri',
				'guardianphone' => '740204022789',
				'guardiannric' => '0156768876',
				'guardianemail' => 'azmi@gmail.com'
			]
		];

		foreach ($applications as $key => $application) {
			Application::create($application);
		}
    }
}
