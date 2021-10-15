<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'start_time','end_time','description','event_place','event_for'
    ];

    protected $dates = [
        'start_time','end_time'
    ];
}
