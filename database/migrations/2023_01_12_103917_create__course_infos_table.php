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
        Schema::create('_course_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CourseName');
            $table->string('levelofstudy');
            $table->integer('intake');
            $table->string('month');
            $table->string('programme');
            $table->string('faculty');
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
        Schema::dropIfExists('_course_infos');
    }
};
