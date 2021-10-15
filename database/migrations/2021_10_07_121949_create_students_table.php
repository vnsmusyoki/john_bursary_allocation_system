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
            $table->bigInteger('guardian_id')->nullable()->unsigned();
            $table->bigInteger('father_id')->nullable()->unsigned();
            $table->bigInteger('mother_id')->nullable()->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->string('full_names');
            $table->string('dob');
            $table->string('gender');
            $table->string('class_admited');
            $table->string('admission_number');
            $table->string('slag');
            $table->string('photo');
            $table->string('email')->unique();
            $table->string('postal_office');
            $table->string('postal_code');
            $table->string('postal_address');
            $table->foreign('guardian_id')->references('id')->on('guardians')->onDelete('cascade');
            $table->foreign('mother_id')->references('id')->on('guardians')->onDelete('cascade');
            $table->foreign('father_id')->references('id')->on('guardians')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
