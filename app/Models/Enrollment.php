<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Enrollment extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    public function courses()
    {
        return $this->hasMany(EnrollmentCourse::class,'id');
    }
} 
