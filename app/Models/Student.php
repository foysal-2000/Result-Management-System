<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;
   /* protected $fillable = [
        'image',
        "roll",
        "register",
        "student_name",
        "father_name",
        "mother_name" ,
        "dateofbirth",
        "school_name" ,
        "eiin" ,
        "gpa_1" ,
        "passing_year",
        "school_name_2",
        "eiin_2",
        "gpa_2",
        "passing_year_2",
        "gardian_name",
        "gardian_phone",
        "gardian_profession" ,
        'relation_with_gardian',
        "year",
        "batch",
        "section",
        "mobile_no",
        "email",
        "present_address",
        "parmanent_address",
        "student_phone",
        'student_email'
        
    ];
    */
    protected $guarded =[];
}
