<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_student_id')->nullable()->unsigned();
            $table->bigInteger('school_id')->nullable()->unsigned();
            $table->string('phone_number');
            $table->integer('id_number');
            $table->string('year_of_study');
            $table->string('county');
            $table->string('registration_number');
            $table->string('course_id');
            $table->string('constituency');
            $table->foreign('user_student_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
