<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Intervention\Image\Facades\Image;
class StudentController extends Controller
{
    public function create()
    {
        return view('Backend.student.create');
    }
    public function store(Request $request)
    {
        try {
            $student = $request->all();
            
            if ($request->hasFile('image')) {
                $image = $this->uploadImage($student['student_name'], $request->file('image'));
                $student['image'] = $image;
            }

            $students = Student::create($student);

            return redirect()->route('Backend.student.create')->withSuccess('Product inserted successfully.');
        } catch (Exception $e) {
            return view($e->getMessage());
            
        }
    }
    public function edit()
    {
        return view('Backend.student.edit');
    }
    public function destory()
    {
        return view('Backend.student.destory');
    }
    public function show()
    {
        $students = Student::all();
        
        return view('Backend.student.index',compact('students'));
    }



    public function uploadImage($student_name, $image)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file_name = $student_name . '-' . $timestamp . '.' . $image->getClientOriginalExtension();
        $pathToUpload = storage_path('/app/public/students/');

        if (!is_dir($pathToUpload)) {
            mkdir($pathToUpload, 0755, true);
        }

        // Use Intervention Image to resize and save the image
        Image::make($image)->resize(634, 792)->save($pathToUpload . $file_name);

        return $file_name;
    }


    
}
