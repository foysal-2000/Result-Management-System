b<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <div class="card">
            <div class="card-header">Student Course Register</div>
            <div class="card-body">
                <form action="{{route('Backend.course.searchcourse')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="department" class="form-label"><b>Department</b></label>
                            <select name="department" id="department" class="form-control">
                                <option value="">Select department</option>
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="Law">Law</option>
                                <option value="BBA">BBA</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="English">English</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="program" class="form-label"><b>Program</b></label>
                            <select name="program" id="program" class="form-control">
                                <option value="">Select a Program</option>
                                <option value="Bsc in CSE">Bsc in CSE</option>
                                <option value="Bsc in EEE">Bsc in EEE</option>
                                <option value="Bsc in Civil">Bsc in Civil </option>
                            </select>
                        </div>
                        <div class="col-md-2"><br>
                            <button type="submit" class="btn btn-md btn-primary form-control mt-2">Search Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Course List</div>
            <div class="card-body">
            <form action="{{route('Backend.course.swc_store')}}" method="post">
                @csrf
                <div class="col-md-3">
                    <label for="roll" class='form-label'>Student ID</label>
                    <input type="text" name="student_id" class='form-control' required>
                </div><br>
            @if(isset($courses))  
                <table class='table table-bordered text-center'>
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Semster</th>
                            <th>Semster No</th>
                            <th>Credit</th>
                            <th>Fees</th>
                            <th>Total Amount</th>
                            <th>course Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @php
                        $i=1;
                        @endphp
                        @foreach($courses as $course)
                            <tr>
                                
                                <td>{{$i++}}</td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][course_code]" value="{{($course->course_code)}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][course_title]" value="{{$course->course_title}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][semster]" value="{{$course->semster}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][semster_no]" value="{{$course->semster_no}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][credit]" value="{{$course->credit}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][fees]" value="{{$course->fees}}" class='form-control' required>
                                </td>
                                <td>
                                    <input type="text" name="course_type[{{$i}}][total_fees]" value="{{$course->total_fees}}" class='form-control' required>
                                </td>
                                <td>
                                    <select name="course_type[{{$i}}][course_type]" class='form-control'>
                                        <option value="New">New</option>
                                        <option value="Retake">Retake</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning remove">Remove</button>
                                </td>
                            </tr> 
            @endforeach
                            <tr>
                                <td rowspan='3'></td>
                                <td colspan='2'><b>Total Credit</b></td>
                                <td colspan='1' name='totalcreditamount' id='total'><b>0</b></td>
                                <td colspan='1'><b>Total Fees</b></td>
                                <td colspan='1'name='totalfees' id='totalfees'><b>0</b></td>
                                <td colspan='1'></td>
                            </tr>
                        </tbody>
                        
                
                </table> 
                @else
                <p>No student found.</p>
                @endisset 
            </div>
            <button type='submit class='btn btn-md btn-primar'>Submit</button>
        </form>
        </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
