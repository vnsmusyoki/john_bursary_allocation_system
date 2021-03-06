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
            $table->bigInteger('constituency_id')->nullable()->unsigned();
            $table->bigInteger('county_id')->nullable()->unsigned();
            $table->string('phone_number');
            $table->integer('id_number');
            $table->string('year_of_study');
            $table->string('registration_number');
            $table->bigInteger('course_id')->nullable()->unsigned();
            $table->foreign('user_student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('set null');
            $table->foreign('constituency_id')->references('id')->on('county_constituencies')->onDelete('set null');
            $table->foreign('county_id')->references('id')->on('county_constituencies')->onDelete('set null');
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
