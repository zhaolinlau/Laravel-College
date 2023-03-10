<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacts;

class ContactUsSeeder extends Seeder
{
	public function run()
    {
		$contacts = [
		[	'name' => 'Shammene',
			'email' => 'shammene9905@gmail.com',
			'phone_number' => '01126495501',
			'subject' => 'Hi',
			'Message' => 'Hello',
			'status' => 'SUBMIT',
		],
		[
			'name' => 'Hanim',
			'email' => 'hanim@gmail.com',
			'phone_number' => '0278866543',
			'subject' => 'Hi',
			'Message' => 'How to make payment?',
			'status' => 'SUBMIT',
		],
		[	'name' => 'Melisa',
			'email' => 'Melisa@gmail.com',
			'phone_number' => '0119897754',
			'subject' => 'Hi',
			'Message' => 'How to Apply for a Course?',
			'status' => 'SUBMIT',
		]
		];

		foreach ($contacts as $key => $contacts) {
			contacts::create($contacts);
		}
	}
}
