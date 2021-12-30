<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBursaryApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bursary_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('bursary_id');
            $table->bigInteger('bursary_student_id')->nullable()->unsigned();
            $table->bigInteger('bursary_user_id')->nullable()->unsigned();
            $table->bigInteger('bursary_school_id')->nullable()->unsigned();
            $table->bigInteger('bursary_course_id')->nullable()->unsigned();
            $table->bigInteger('bursary_constituency_id')->nullable()->unsigned();
            $table->bigInteger('bursary_county_id')->nullable()->unsigned();
            $table->string('guardian_full_names');
            $table->string('gender');
            $table->string('guardian_phone_number');
            $table->string('student_category');
            $table->string('student_helb_status');
            $table->string('student_helb_status_decision')->nullable();
            $table->string('financial_assistance');
            $table->string('family_status');
            $table->string('special_needs');
            $table->string('special_needs_description')->nullable();
            $table->string('family_income_loss_description')->nullable();
            $table->string('family_income_loss');
            $table->string('fee_structure');
            $table->string('special_needs_attachment')->nullable();
            $table->string('school_perfomance');
            $table->string('relevant_attachment')->nullable();
            $table->longText('application_support');
            $table->string('bursary_status');
            $table->foreign('bursary_student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('bursary_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('bursary_school_id')->references('id')->on('schools')->onDelete('set null');
            $table->foreign('bursary_course_id')->references('id')->on('courses')->onDelete('set null');
            $table->foreign('bursary_constituency_id')->references('id')->on('county_constituencies')->onDelete('set null');
            $table->foreign('bursary_county_id')->references('id')->on('county_constituencies')->onDelete('set null');
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
        Schema::dropIfExists('bursary_applications');
    }
}
