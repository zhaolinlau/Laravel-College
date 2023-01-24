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
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('level');
            $table->string('nationality');
            $table->string('campus');
            $table->string('programme1');
            $table->string('programme2');
            $table->string('programme3');
            $table->string('fullname');
            $table->string('nric'); 
            $table->string('phone');
            $table->string('email');
            $table->string('files');
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
        Schema::dropIfExists('applications');
    }
};
