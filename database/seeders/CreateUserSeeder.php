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
			[
				'student_id' => 'CB12345',
				'name' => 'Student',
				'email' => 'student@gmail.com',
				'phone_number' => '0987654321',
				'role' => 0,
				'password' => bcrypt('12345678'),
			],
			// ========================= staff =========================
			[
				'staff_id' => 'staff101',
				'name' => 'Staff',
				'email' => 'staff@gmail.com',
				'phone_number' => '0123456789',
				'faculty' => 'computing',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff202',
				'name' => 'John',
				'email' => 'john@gmail.com',
				'phone_number' => '032475037345',
				'faculty' => 'science',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff303',
				'name' => 'Jack',
				'email' => 'jack@gmail.com',
				'phone_number' => '345873940857',
				'faculty' => 'mathematic',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff404',
				'name' => 'Lee',
				'email' => 'lee@gmail.com',
				'phone_number' => '6745674356',
				'faculty' => 'mechanical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff505',
				'name' => 'william',
				'email' => 'william@gmail.com',
				'phone_number' => '4564567',
				'faculty' => 'electrical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff606',
				'name' => 'nigel',
				'email' => 'nigel@gmail.com',
				'phone_number' => 'computing',
				'faculty' => 'finance',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff707',
				'name' => 'hovah',
				'email' => 'hovah@gmail.com',
				'phone_number' => '465373568',
				'faculty' => 'mechatronic',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff808',
				'name' => 'Ahmad',
				'email' => 'ahmad@gmail.com',
				'phone_number' => '23765987567',
				'faculty' => 'electronic',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff909',
				'name' => 'Ali',
				'email' => 'ali@gmail.com',
				'phone_number' => '4583546378567',
				'faculty' => 'computing',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff111',
				'name' => 'Kai Qing',
				'email' => 'kaiqing@gmail.com',
				'phone_number' => '36436734567',
				'faculty' => 'architecture',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff212',
				'name' => 'Kenn',
				'email' => 'kenn@gmail.com',
				'phone_number' => '563456',
				'faculty' => 'computing',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff313',
				'name' => 'Siti',
				'email' => 'siti@gmail.com',
				'phone_number' => '543563457',
				'faculty' => 'architecture',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff414',
				'name' => 'Joey',
				'email' => 'joey@gmail.com',
				'phone_number' => '6435745956',
				'faculty' => 'mechanical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff515',
				'name' => 'Seow',
				'email' => 'seow@gmail.com',
				'phone_number' => '67945345346',
				'faculty' => 'electrical',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'staff_id' => 'staff616',
				'name' => 'Mei',
				'email' => 'mei@gmail.com',
				'phone_number' => '54345734567',
				'faculty' => 'Mathematic',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			// ========================= admin =========================
			[
				'admin_id' => 'admin101',
				'name' => 'Admin',
				'email' => 'admin@gmail.com',
				'phone_number' => '10293847756',
				'role' => 2,
				'password' => bcrypt('12345678'),
			]
		];

		foreach ($users as $key => $user) {
			User::create($user);
		}
	}
}
