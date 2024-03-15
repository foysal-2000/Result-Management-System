<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrollmentCourse;
use App\Models\EnrollmentCourses;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\StudentWiseCourse;
use Exception;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function create()
    {
        return view('Backend.enrollment.create'); 
    }
    
    public function store(Request $request)
    {
        // Check if enrollment already exists
        $existingEnrollment = Enrollment::where('student_id', $request->input('student_id'))
            ->where('semster', $request->input('semster'))
            ->where('semster_no', $request->input('semster_no'))
            ->first();

        if ($existingEnrollment) {
            // Enrollment already exists, display a message or handle as needed
            return redirect()->route('Backend.enrollment.create')->with('error', 'Student is already enrolled for the specified semester and semester number.');
        }

        // Save student information
        $enrollment = new Enrollment();
        $enrollment->student_id = $request->input('student_id');
        $enrollment->registration = $request->input('registration');
        $enrollment->student_name = $request->input('student_name');
        $enrollment->department = $request->input('department');
        $enrollment->program = $request->input('program');
        $enrollment->year = $request->input('year');
        $enrollment->semster = $request->input('semster');
        $enrollment->semster_no = $request->input('semster_no');
        $enrollment->save();

        // Save course information
        $courses = $request->input('course');
        foreach ($courses as $course) {
            // Check if course already exists for this enrollment
            $existingCourse = EnrollmentCourse::where('enrollment_id', $enrollment->id)
                ->where('course_code', $course['course_code'])
                ->where('course_title', $course['course_title'])
                ->first();

            if ($existingCourse) {
                // Course already exists for this enrollment, display a message or handle as needed
                return redirect()->route('Backend.enrollment.create')->withErrors(['error' => 'Student is already enrolled for the specified semester and semester number.']);
            }

            $newCourse = new EnrollmentCourse();
            $newCourse->enrollment_id = $enrollment->id;
            $newCourse->course_code = $course['course_code'];
            $newCourse->course_title = $course['course_title'];
            $newCourse->credit = $course['credit'];
            $newCourse->fees = $course['fees'];
            $newCourse->total_fees = $course['total_fees'];
            $newCourse->course_type = $course['course_type'];
            $newCourse->save();
        }

        // You can add any additional logic or redirects here
        return redirect()->route('Backend.enrollment.create')->with('success', 'Enrollment and courses added successfully.');
    }

    public function show(Request $request)
    {
        $enrollments = Enrollment::all();
        return view('Backend.enrollment.create', compact('enrollments'));
    }

    public function search(Request $request)
    {
        try {
            // Assuming 'roll' is the student_id, 'semster' is the semester, and 'semster_no' is the semester_no
            $studentId = $request->input('roll');
            $semester = $request->input('semster');
            $semesterNo = $request->input('semster_no');
    
            // Retrieve the student information
            $student = Student::where('roll', $studentId)->first();
    
            // Retrieve courses for the selected student and semester
            $courses = StudentWiseCourse::where('student_id', $studentId)
                ->where('semster', $semester)
                ->where('semster_no', $semesterNo)
                ->get();
                
            return view('Backend.enrollment.create', compact('student', 'courses'));
        } catch (Exception $e) {
            return view($e->getMessage());
        }
    }
    


}
