<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">
  @if(isset($enrollments))
    <div class="card mt-2">
      <div class="card-body">
        <form action="{{route('Backend.result.search')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6" id="t">
              <label for="roll number" class='form-label'><b>Search Student By Student ID</b> </label>
              <input type="text" name="student_id" class='form-control' id='roll'>
            </div>
            <div class="col-md-2">
              <br>
              <button type='submit' class='btn btn-md btn-primary form-control mt-2'>Search</button>
            </div>
          </div>
        </form>
      </div>
    </div><br>
    <div class="card">
      <div class="card-header text-center">Student Information</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <label for="student_name" class='form-label'>Student ID</label>
            <input type="text" name="student_name" value="{{$enrollments->student_id}}"  class='form-control' readonly>
          </div>
          <div class="col-md-3">
            <label for="student_registration" class='form-label'>Student Name</label>
            <input type="text" name="registration_no" value="{{$enrollments->student_name}}" class='form-control' readonly>
          </div>
          <div class="col-md-3">
            <label for="department" class="form-label"><b>Department</b></label>
            <input type='text' name='department' value="{{$enrollments->department}}" class='form-control'>
          </div>
          <div class="col-md-3">
            <label for="program" class="form-label"><b>Program</b></label>
            <input type='text' name='program' value="{{$enrollments->program}}"class='form-control'>
          </div>

          <div class="col-md-4">
            <label for="semester" class='form-label'>Semester</label>
            <input type='text' name='semester' value="{{$enrollments->semester}}"  class='form-control'>
          </div>
          <div class="col-md-4">
            <label for='batch' class='form-label'><b>Semester Number</b></label>
            <input type='text' name='semester_no' value="{{$enrollments->semester_no}}" class='form-control'>
          </div>
          <div class="col-md-4">
            <label for="year" class='form-label'><b>Year</b></label>
            <input type='text' name='year'value="{{$enrollments->year}}" class='form-control'>
          </div>
        </div>
      </div>
    </div><br>
  @endif
  @if(isset($enrollmentCourses))
  
    <div class="card">
      <div class="card-header text-center">Result Sheet Information</div>
      <div class="card-body">
      @php
        $i=1;
      @endphp
      @foreach($enrollmentCourses as $course)
        <div class="row">
          <div class="col-md-2">
            <label for="course_code" class="form-label"><b>Course Code</b></label>
            <input type="text" name="course_code" value="{{$course->course_code}}" class="form-control" readonly>

          </div>
          <div class="col-md-6">
            <label for="course_title" class="form-label"><b>Course Title</b></label>
            <input type="text" name="course_title" id="course_title"  value="{{$course->course_title}}" class="form-control" readonly>
          </div>
          <div class="col-md-1">
            <label for="grade" class="form-label"><b>Grade</b></label>
            <select name="grade" id="semester" class="form-control">
              <option value="">Select a Grade</option>
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B">B</option>
              <option value="B+">B+</option>
              <option value="C+">C+</option>
              <option value="C">C</option <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="F">F</option>
              <option value="Retake">Retake</option>
            </select>
          </div>
          <div class="col-md-1">
            <label for="gpa" class="form-label"><b>GPA</b></label>
            <input type="text" name="gpa" id="gpa" class="form-control">
          </div>
          <div class="col-md-1">
            <label for="mark" class="form-label"><b>Mark</b></label>
            <input type="number" name="mark" id="mark" class="form-control">
          </div>
        </div><br>
      @endforeach
        <div class="row">
          <div class="col-md-12">
            <button type='submit' class='btn btn-lg btn-primary form-control'>Create Result</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  @endif





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>