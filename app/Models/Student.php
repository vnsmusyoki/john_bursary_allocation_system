<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_student_id', 'school_id', 'phone_number', 'id_number', 'year_of_study', 'county', 'registration_number', 'course_id', 'constituency'];

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
}
