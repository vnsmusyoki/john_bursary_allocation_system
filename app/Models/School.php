<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function schoolmanager()
    {
        return $this->belongsTo(User::class, 'school_admin_user_id', 'id');
    }
}
