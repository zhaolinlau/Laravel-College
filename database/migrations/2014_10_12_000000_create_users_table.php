<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id()->unique();
			$table->string('admin_id')->nullable()->unique();
			$table->string('staff_id')->nullable()->unique();
			$table->string('student_id')->nullable()->unique();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('phone_number');
			$table->string('faculty')->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->tinyInteger('role')->default(0);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
};
