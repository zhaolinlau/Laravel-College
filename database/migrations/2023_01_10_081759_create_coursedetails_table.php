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
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campus1');
            $table->string('mode1');
            $table->string('levelofstudy1');
            $table->integer('intake1');
            $table->string('month1');
            $table->string('programme1');
            $table->string('faculty1');
            $table->string('campus2');
            $table->string('mode2');
            $table->string('levelofstudy2');
            $table->integer('intake2');
            $table->string('month2');
            $table->string('programme2');
            $table->string('faculty2');
            $table->string('campus3');
            $table->string('mode3');
            $table->string('levelofstudy3');
            $table->integer('intake3');
            $table->string('month3');
            $table->string('programme3');
            $table->string('faculty3');
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
        Schema::dropIfExists('coursedetails');
    }
};
