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
            $table->string('campus');
            $table->string('mode');
            $table->string('levelofstudy');
            $table->integer('intake');
            $table->string('month');
            $table->string('programme1');
            $table->string('faculty1');
            $table->string('programme2');
            $table->string('faculty2');
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
