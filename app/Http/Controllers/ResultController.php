<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\EnrollmentCourse;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\ResultCourse;
class ResultController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        return view('Backend.result.create',compact('courses'));
    }
    public function result()
    {
        $courses = Course::all();
        return view('Backend.result.result',compact('courses'));
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'student_name' => 'required|string',
            'registration_no' => 'required|string',
            'department' => 'required|string',
            'program' => 'required|string',
            'semster' => 'required|string',
            'semster_no' => 'required|string',
            'year' => 'required|string',
            'courses' => 'required|array', // Ensure 'courses' is present and is an array
            'courses.*.course_code' => 'required|string',
            'courses.*.course_title' => 'required|string',
            'courses.*.grade' => 'nullable|string',
            'courses.*.gpa' => 'nullable|string',
            'courses.*.mark' => 'nullable|integer',
        ]);

        // Create a new result entry
        $result = Result::create([
            'student_name' => $request->input('student_name'),
            'registration_no' => $request->input('registration_no'),
            'department' => $request->input('department'),
            'program' => $request->input('program'),
            'semster' => $request->input('semster'),
            'semster_no' => $request->input('semster_no'),
            'year' => $request->input('year'),
        ]);
        if ($request->has('courses') && is_array($request->input('courses'))) {

            foreach ($request->input('courses') as $courseData) {
                ResultCourse::create([
                    'result_id' => $result->id,
                    'course_code' => $courseData['course_code'],
                    'course_title' => $courseData['course_title'],
                    'grade' => $courseData['grade'],
                    'gpa' => $courseData['gpa'],
                    'mark' => $courseData['mark'],
                ]);
            }
        }

        return redirect()->route('Backend.result.create')->with('success', 'Result added successfully.');
    }
    public function show()
    {
        return view('Backend.result.show');
    }
    public function search(Request $request)
    {
        $studentId = $request->input('student_id');
        $enrollments = Enrollment::where('student_id', $studentId)->first();

        if (!$enrollments) {
            dd($enrollments);
            return view('Backend.result.show', compact('enrollments', 'enrollmentCourses'));
            
        }
        else{
            $enrollmentCourses = EnrollmentCourse::where('enrollment_id', $enrollments->id)->get();

        }

    }



    public function search_result(Request $request)
    {
        $studentId = $request->input('student_id');
        $student_name = $request->input('year');
        $studentId = $request->input('semster');
        $enrollments = Enrollment::where('student_id', $studentId)->first();
        if (!$enrollments) {
            return redirect()->route('Backend.result.create')->with('error', 'Enrollment not found for the specified student ID.');
        }
        $enrollmentCourses = EnrollmentCourse::where('enrollment_id', $enrollments->id)->get();
        return view('Backend.result.show', compact('enrollments', 'enrollmentCourses'));
    }




}
