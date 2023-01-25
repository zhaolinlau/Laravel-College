<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [
			[	'student_id' => 'CB12345',
				'name' => 'Student',
				'email' => 'student@gmail.com',
				'phone_number' => '0987654321',
				'role' => 0,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff111',
				'name' => 'Staff1',
				'email' => 'staff1@gmail.com',
				'phone_number' => '0123456789',
				'faculty' => 'computing',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff222',
				'name' => 'Staff2',
				'email' => 'staff2@gmail.com',
				'phone_number' => '0123456789',
				'faculty' => 'mechanical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff333',
				'name' => 'Staff3',
				'email' => 'staff3@gmail.com',
				'phone_number' => '0123456789',
				'faculty' => 'electrical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'admin_id' => 'admin111',
				'name' => 'Admin1',
				'email' => 'admin1@gmail.com',
				'phone_number' => '10293847756',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],
			[
				'admin_id' => 'admin222',
				'name' => 'Admin2',
				'email' => 'admin2@gmail.com',
				'phone_number' => '1234567890',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],
			[
				'admin_id' => 'admin333',
				'name' => 'Admin3',
				'email' => 'admin3@gmail.com',
				'phone_number' => '6758493021',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],

		];

		foreach ($users as $key => $user) {
			User::create($user);
		}
    }
}
