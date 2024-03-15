<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('registration_no');
            $table->string('department');
            $table->string('program');
            $table->string('semster');
            $table->string('semster_no');
            $table->string('year');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('result_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('result_id')->constrained(); // Assumes results table has 'id' column
            $table->string('course_code');
            $table->string('course_title');
            $table->string('grade')->nullable();
            $table->string('gpa')->nullable();
            $table->integer('mark')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('result_courses');
        Schema::dropIfExists('results');
    }
}
