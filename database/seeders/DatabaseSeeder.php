<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		$this->call(ApplicationSeeder::class);
		$this->call(CreateUserSeeder::class);
		$this->call(FAQadmissionSeeder::class);
		$this->call(FAQprogrammeSeeder::class);
		$this->call(ContactUsSeeder::class);
		$this->call(InfoSeeder::class);
	}
}
