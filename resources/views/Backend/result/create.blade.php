<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #dcdcdc;
            display: block;
        }

        .sidebar a:hover {
            background-color: #6c757d;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            margin-top: -10px;
        }

        .card {
            margin-top: -10px;
        }

        #t {
            margin-left: 400px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="{{route('Backend.dashboard')}}">Home</a>
        <a href="{{route('Backend.course.create')}}">Courses</a>
        <a href="{{route('Backend.course.index')}}">Courses List</a>
        <a href="{{route('Backend.student.create')}}">Students Create</a>
        <a href="{{route('Backend.student.create')}}"> Students list</a>
        <a href="{{route('Backend.result.create')}}">Results Create</a>
        <a href="{{route('Backend.result.show')}}">Results show</a>
    </div>
    <div class="content">

        <div class="card mt-2">
            <div class="card-header">
                <center>
                    <h3>Student Information</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="{{route('search.result')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6" id="t">
                            <label for="roll number" class='form-label'><b>Student ID</b> </label>
                            <input type="text" name="student_id" class='form-control' id='roll'>
                        </div>
                        <div class="col-md-2">
                            <br>
                            <button type='submit' class='btn btn-md btn-primary form-control mt-2'>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            @if(isset($enrollments))
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="student_name" class='form-label'>Student ID</label>
                            <input type="text" name="student_name" value="{{$enrollments->student_id}}"
                                class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="student_registration" class='form-label'>Student Name</label>
                            <input type="text" name="registration_no" value="{{$enrollments->student_name}}"
                                class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="department" class="form-label"><b>Department</b></label>
                            <input type='text' name='department' value="{{$enrollments->department}}"
                                class='form-control'>
                        </div>
                        <div class="col-md-3">
                            <label for="program" class="form-label"><b>Program</b></label>
                            <input type='text' name='program' value="{{$enrollments->program}}" class='form-control'>
                        </div>

                        <div class="col-md-4">
                            <label for="semester" class='form-label'>Semester</label>
                            <input type='text' name='semester' value="{{$enrollments->semester}}" class='form-control'>
                        </div>
                        <div class="col-md-4">
                            <label for='batch' class='form-label'><b>Semester Number</b></label>
                            <input type='text' name='semester_no' value="{{$enrollments->semester_no}}"
                                class='form-control'>
                        </div>
                        <div class="col-md-4">
                            <label for="year" class='form-label'><b>Year</b></label>
                            <input type='text' name='year' value="{{$enrollments->year}}" class='form-control'>
                        </div>
                    </div>
            </div>
        </div>
        <br>
        @endif
        @if(isset($enrollmentCourses))
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Result Entry Sheet</h3>
                </center>
            </div>
            <div class="card-body">
                @php $i=1; @endphp
                @foreach($enrollmentCourses as $course)
                <div class="row">
                    <div class="col-md-2">
                        <label for="course_code" class="form-label"><b>Course Code</b></label>
                        <input type="text" name="courses[{{ $i }}][course_code]" value="{{ $course->course_code }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="course_title" class="form-label"><b>Course Title</b></label>
                        <input type="text" name="courses[{{ $i }}][course_title]" value="{{ $course->course_title }}" id="course_title" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="grade" class="form-label"><b>Grade</b></label>
                        <select name="courses[{{ $i }}][grade]" id="semester" class="form-control">
                            <option value="">Select a Grade</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B">B</option>
                            <option value="B+">B+</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                            <option value="Retake">Retake</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="gpa" class="form-label"><b>GPA</b></label>
                        <input type="text" name="courses[{{ $i }}][gpa]" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="mark" class="form-label"><b>Mark</b></label>
                        <input type="number" name="courses[{{ $i }}][mark]" class="form-control">
                    </div>
                </div><br>
                
                @php 
                    $i++; 
                @endphp
            @endforeach
                <div class="row">
                    <button type='submit' class='btn btn-primary btn-lg form-control'>Create Result</button>
                </div>
            </div>
           
        </div>
        @endif      
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
