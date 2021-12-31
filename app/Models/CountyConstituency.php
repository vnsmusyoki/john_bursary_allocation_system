<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountyConstituency extends Model
{
    use HasFactory;

    protected $fillable = ['county', 'constituency', 'user_manager_id'];

    public function countyuser()
    {
        return $this->belongsTo(User::class, 'user_manager_id', 'id');
    }
}
