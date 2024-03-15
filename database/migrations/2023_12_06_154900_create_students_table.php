<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();    
            $table->string('roll')->nullable();
            $table->string('register')->nullable();
            $table->string('student_email')->nullable();
            $table->string('image')->nullable();
            $table->string('student_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('student_phone')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->string('school_name')->nullable();
            $table->string('eiin_1')->nullable();
            $table->string('gpa_1')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('school_name_2')->nullable();
            $table->string('eiin_2')->nullable();
            $table->string('gpa_2')->nullable();
            $table->string('passing_year_2')->nullable();
            $table->string('gardian_name')->nullable();
            $table->string('gardian_phone')->nullable();
            $table->string('gardian_profession')->nullable();
            $table->string('relation_with_gardian')->nullable();
            $table->string('semster')->nullable();
            $table->string('year')->nullable();
            $table->string('batch')->nullable();
            $table->string('section')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->string('department')->nullable();
            $table->string('program')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
