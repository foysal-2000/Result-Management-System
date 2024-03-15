<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentWiseCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function dashboard()
    {
        return view('Backend.dashboard');
    }
    public function create()
    {
        
        return view('Backend.course.create');
    }
    public function store(Request $request)
    {
        try {
            $course = $request->all();
            
            $courses= Course::create($course );
            return redirect()->route('Backend.course.index')->withSuccess('Course added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    public function show()
    {
        $courses=Course::all();
        return view('Backend.course.index',compact('courses'));
    }
    public function studentcoursecreate()
    {
        $courses=Course::all();
        return view('Backend.course.swc-create',compact('courses'));
    }
    public function studentcoursestore(Request $request)
    {
        try {
            $studentId = $request->input('student_id');
            $courseTypes = $request->input('course_type');

            foreach ($courseTypes as $courseType) {
                // Check if a record with the same student ID and course code already exists
                $existingRecord = StudentWiseCourse::where('student_id', $studentId)
                    ->where('course_code', $courseType['course_code'])
                    ->first();

                // If the record doesn't exist, create a new one
                if (!$existingRecord) {
                    StudentWiseCourse::create([
                        'student_id' => $studentId,
                        'course_code' => $courseType['course_code'],
                        'course_title' => $courseType['course_title'],
                        'semster' => $courseType['semster'],
                        'semster_no' => $courseType['semster_no'],
                        'credit' => $courseType['credit'],
                        'fees' => $courseType['fees'],
                        'total_fees' => $courseType['total_fees'],
                        'course_type' => $courseType['course_type'],
                    ]);
                } else {
                    // You can choose to update the existing record or skip it
                    // For example, you can update the fees and total_fees fields:
                    $existingRecord->update([
                        'fees' => $courseType['fees'],
                        'total_fees' => $courseType['total_fees'],
                    ]);
                }
            }

            return redirect()->route('Backend.course.index')->withSuccess('Courses added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function student_show()
    {
        $courseTypes=StudentWiseCourse::all();
        return view('Backend.course.swc-show',compact('courseTypes'));
    }
    public function searchcourse(Request $request)
    {
        $department = $request->input('department');
        $program = $request->input('program');

        // Use where clause for each condition and get the results
        $courses = Course::where('department', $department)
                        ->where('program', $program)
                        ->get();

        return view('Backend.course.swc-create', ['courses' => $courses]);
    }


    public function stored()
    {
        
    }

}
