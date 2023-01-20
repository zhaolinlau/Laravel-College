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
        Schema::create('user_applies', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('nationality');
            $table->string('nric');
            $table->string('campus');
            $table->string('levelofstudy');
            $table->string('programme1');
            $table->string('faculty1');
            $table->string('programme2');
            $table->string('faculty2');
            $table->string('programme3');
            $table->string('faculty3');
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('guardianname');
            $table->string('guardianphone');
            $table->string('guardiannric');
            $table->string('guardianemail');
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
        Schema::dropIfExists('user_applies');
    }
};
