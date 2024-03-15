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
        Schema::create('enrollment_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained(); // Assuming you have a foreign key relationship
            $table->string('course_code');
            $table->string('course_title');
            $table->string('credit');
            $table->string('fees');
            $table->string('total_fees');
            $table->string('course_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_courses');
    }
};
