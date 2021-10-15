<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function studentguardian()
    {
        return $this->belongsTo(Guardian::class, 'guardian_id', 'id');
    }
    public function studentmother()
    {
        return $this->belongsTo(Guardian::class, 'mother_id', 'id');
    }
    public function studentfather()
    {
        return $this->belongsTo(Guardian::class, 'father_id', 'id');
    }
    public function studentuser()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    protected $fillable = [
        'guardian_id',
        'mother_id',
        'father_id',
        'users_id',
        'full_names',
        'dob',
        'gender',
        'class_admited',
        'admno',
        'photo',
        'email',
        'postal_office',
        'postal_code',
        'postal_address'
    ];

    protected $dates = [
        'dob'
    ];
}
