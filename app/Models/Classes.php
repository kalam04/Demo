<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections;

class Classes extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

    public function sections(){
        return $this->belongsToMany(Sections::class);
    }
}
