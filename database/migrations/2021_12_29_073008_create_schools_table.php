<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('school_county');
            $table->string('school_category');
            $table->bigInteger('school_admin_user_id')->nullable()->unsigned();
            $table->string('school_location_address');
            $table->string('school_website');
            $table->string('school_contacts');
            $table->string('school_email');
            $table->foreign('school_admin_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
}
