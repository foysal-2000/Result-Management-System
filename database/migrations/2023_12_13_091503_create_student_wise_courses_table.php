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
        Schema::create('student_wise_courses', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('course_code');
            $table->string('course_title');
            $table->string('semster');
            $table->string('semster_no');
            $table->string('credit');
            $table->string('fees');
            $table->string('total_fees');
            $table->string('course_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_wise_courses');
    }
};
