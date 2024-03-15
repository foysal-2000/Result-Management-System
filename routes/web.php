<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultPublishController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentWiseCourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

/*********Employee  Controller  */

    Route::get('/employees/dashboard', 'App\Http\Controllers\Auth\EmployeeController@dashboard')->name('Backend.employee.dashboard');
    Route::get('/employees/index', 'App\Http\Controllers\Auth\EmployeeController@index')->name('Backend.employee.index');
    //Route::get('/employee/register', 'App\Http\Controllers\Auth\RegisteredUserController@create')->name('auth.employee-register');
   // Route::patch('/employees/', [EmployeeController::class, 'update'])->name('profile.update');
    //Route::delete('/employees/', [EmployeeController::class, 'destroy'])->name('profile.destroy');


    /*** students*/
    Route::get('/students/create', [StudentController::class, 'create'])->name('Backend.student.create');
    Route::get('/students/show', [StudentController::class, 'show'])->name('Backend.student.index');
    Route::post('/students/store', [StudentController::class, 'store'])->name('Backend.student.store');
    Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('Backend.student.edit');
    Route::post('/students/update/{student}', [StudentController::class, 'update'])->name('Backend.student.update');
    Route::post('/students/softdelete/{student}', [StudentController::class, 'destory'])->name('Backend.student.destory');


    Route::get('/courses/create', [CourseController::class, 'create'])->name('Backend.course.create');
    Route::get('/courses/store', [CourseController::class, 'store'])->name('Backend.course.store');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('Backend.course.create');
    Route::get('/courses/show', [CourseController::class, 'show'])->name('Backend.course.index');
    Route::get('/dashboard', [CourseController::class, 'dashboard'])->name('Backend.dashboard');


    Route::get('/results/create',[ResultController::class,'create'])->name('Backend.result.create');
    Route::get('/results/result',[ResultController::class,'result'])->name('Backend.result.result');
    Route::get('/results/show',[ResultController::class,'show'])->name('Backend.result.show');
    Route::post('/results/find',[ResultController::class,'search'])->name('Backend.result.search');
    Route::post('/resultstore/store',[ResultController::class,'store'])->name('Backend.result.stored');


    Route::post('/results/search',[ResultController::class,'search_result'])->name('search.result');

    Route::get('/results-publish/create',[ResultPublishController::class,'create'])->name('Backend.result-publish.create');

   // Route::post('/resultstore/store',[CourseController::class,'stored'])->name('Backend.result.stored');

    Route::get('/courses/student-course-create', [StudentWiseCourseController::class, 'studentcoursecreate'])->name('Backend.course.swc-create');
    Route::post('/courses/student-course-store', [StudentWiseCourseController::class, 'studentcoursestore'])->name('Backend.course.swc_store');
    Route::get('/courses/student-course-show', [StudentWiseCourseController::class, 'student_show'])->name('Backend.course.swc-show');
    Route::post('/course/searchcourse', [StudentWiseCourseController::class, 'searchcourse'])->name('Backend.course.searchcourse');

    Route::get('/entrollments/create', [EnrollmentController::class, 'create'])->name('Backend.enrollment.create');
    Route::get('/entrollments/enrollment-show', [EnrollmentController::class, 'show'])->name('Backend.enrollment.show');
    Route::post('/entrollments/search', [EnrollmentController::class, 'search'])->name('Backend.enrollment.search');
    Route::post('/entrollments/store', [EnrollmentController::class, 'store'])->name('Backend.enrollment.store');
    Route::post('/entrollments/searchcourse', [EnrollmentController::class, 'searchcourse'])->name('Backend.enrollment.searchcourse');
    Route::get('/entrollments/index', [EnrollmentController::class, 'index'])->name('Backend.enrollment.index');





    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('Backend.department.create');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('Backend.department.store');
});

require __DIR__.'/auth.php';
