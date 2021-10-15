<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    public function guardianstudents()
    {
        return $this->hasMany(Student::class);
    }
    public function guardianuser()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'students_id',
        'users_id',
        'category',
        'full_names',
        'phone_number',
        'status',

    ];
}
