<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_student_id', 'school_id', 'phone_number', 'id_number', 'year_of_study', 'county_id', 'registration_number', 'course_id', 'constituency_id'];

    public function studentcourse()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function studentschool()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
    public function studentuser()
    {
        return $this->belongsTo(User::class, 'user_student_id', 'id');
    }
    public function studentcounty()
    {
        return $this->belongsTo(CountyConstituency::class, 'county_id', 'id');
    }
    public function studentconstituency()
    {
        return $this->belongsTo(CountyConstituency::class, 'constituency_id', 'id');
    }
}
