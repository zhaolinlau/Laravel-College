<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacts;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contacts = [
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
    }
}
