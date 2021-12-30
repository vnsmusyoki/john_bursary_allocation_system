<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BursaryApplication extends Model
{
    use HasFactory;
    protected $fillable = ['bursary_id', 'bursary_student_id', 'bursary_user_id', 'bursary_school_id', 'bursary_course_id', 'bursary_constituency_id', 'bursary_county_id', 'guardian_full_names', 'gender', 'guardian_phone_number', 'student_category', 'student_helb_status', 'student_helb_status_decision', 'financial_assistance', 'family_status', 'special_needs', 'special_needs_description', 'family_income_loss', 'fee_structure', 'special_needs_attachment', 'school_perfomance', 'relevant_attachment', 'application_support', 'bursary_status'];

    public function bursarystudent()
    {
        return $this->belongsTo(Student::class, 'bursary_student_id', 'id');
    }
    public function bursaryuser()
    {
        return $this->belongsTo(User::class, 'bursary_user_id', 'id');
    }
    public function bursaryschool()
    {
        return $this->belongsTo(School::class, 'bursary_school_id', 'id');
    }
    public function bursarycourse()
    {
        return $this->belongsTo(Course::class, 'bursary_course_id', 'id');
    }
    public function bursarycounty()
    {
        return $this->belongsTo(CountyConstituency::class, 'bursary_county_id', 'id');
    }
    public function bursaryconstituency()
    {
        return $this->belongsTo(CountyConstituency::class, 'bursary_constituency_id', 'id');
    }
} 
