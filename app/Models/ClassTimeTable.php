<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTimeTable extends Model
{
    use HasFactory;
    protected $fillable=[
        'class',
        'section',
        'subject_group',
        'day',
        'subject',
        'teacher',
        'time_form',
        'time_to',
        'room_no',
    ];
}
