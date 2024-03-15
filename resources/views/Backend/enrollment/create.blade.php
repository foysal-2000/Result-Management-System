<!DOCTYPE html>
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
        <div class="container">
            <div class="card">
                <div class="card-header"><center><h2>Enrollment Form</h2></center></div>
                <div class="card-body">
                    <form action="{{ route('Backend.enrollment.search') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="roll" class='form-label'>Student ID</label>
                                <input type="text" name="roll" value="{{old('roll')}}" class='form-control' required>
                            </div>
                            
                            <div class="col-md-2">
                            <label for='semester' class='form-label'><b>Semester </b></label>
                            <select name='semster' id="year" value="" class='form-control' >
                                <option value=''>Select semester</option>
                                <option value='Spring' >Spring</option>
                                <option value='Summer'>Summer</option>
                                <option value='Fall'>Fall</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                        <label for='batch' class='form-label'><b>Semster No</b></label>
                            <select id="year" value="" class="form-control" name="semster_no" >
                        
                                <option value=''>Select a semester</option>
                                <option value='1th'>1th</option>
                                <option value='2nd' >2nd</option>
                                <option value='3rd'>3rd</option>
                                <option value='4th'>4th</option>
                                <option value='5th'>5th</option>
                                <option value='6th'>6th</option>
                                <option value='7th'>7th</option>
                                <option value='8th'>8th</option>
                                <option value='9th'>9th</option>
                                <option value='10th'>10th</option>
                            </select>
                        </div>
                         
                            <div class="col-md-2"><br>
                                <button type='submit' class='btn btn-md btn-primary form-control mt-2'>Search Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="card">
            
                <div class="card-header"><center><h4>Student And Course Information</h4></center></div>    
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{ route('Backend.enrollment.store') }}" method="POST">
                    @csrf
                @if(isset($student))
                    <div class="row">
                        <div class="col-md-3">
                            <label for="roll" class='form-label'>Student ID</label>
                            <input type="text" name="student_id" value="{{$student->roll}}" class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="register" class='form-label'>Registion Number</label>
                            <input type="text" name="registration" value="{{$student->register}}" class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="student_name" class='form-label'>Student Name:</label>
                            <input type="text" name="student_name" value="{{$student->student_name}}" class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="department" class='form-label'>Department</label>
                            <input type="text" name="department" value="{{$student->department}}" class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="year" class='form-label'>Program</label>
                            <input type="text" name="program" value="{{$student->program}}" class='form-control' readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="year" class='form-label'>Year</label>
                            <select id="year" value="" class="form-control" name="year" required >
                        
                                <option value='' readonly>Select a year</option>
                                <option value='2015'>2015</option>
                                <option value='2016' >2016</option>
                                <option value='2017'>2017</option>
                                <option value='2018'>2018</option>
                                <option value='2019'>2019</option>
                                <option value='2020'>2020</option>
                                <option value='2021'>2021</option>
                                <option value='2022'>2022</option>
                                <option value='2023'>2023</option>
                                <option value='2024'>2024</option>
                                <option value='2025'>2025</option>
                                <option value='2026'>2026</option>
                                <option value='2027'>2027</option>
                                <option value='2028'>2028</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for='semester' class='form-label'><b>Semester </b></label>
                            <select name='semster' id="year" value="" class='form-control' required >
                                <option value='' readonly>Select semester</option>
                                <option value='Spring' readonly>Spring</option>
                                <option value='Summer' readonly>Summer</option>
                                <option value='Fall' readonly>Fall</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                        <label for='batch' class='form-label'><b>Semster No</b></label>
                            <select id="year" value="" class="form-control" name="semster_no" required >
                        
                                <option value='' readonly>Select a semester</option>
                                <option value='1th'>1th</option>
                                <option value='2nd' >2nd</option>
                                <option value='3rd'>3rd</option>
                                <option value='4th'>4th</option>
                                <option value='5th'>5th</option>
                                <option value='6th'>6th</option>
                                <option value='7th'>7th</option>
                                <option value='8th'>8th</option>
                                <option value='9th'>9th</option>
                                <option value='10th'>10th</option>
                            </select>
                        </div>
               
                
                        <div class="col-md-2"><br>
                            <button type='submit' class='btn btn-md btn-primary form-control mt-2'> Enrollment </button>
                        </div> 
                    </div> 
                    <br>
                    @endisset
                    @if(isset($courses))
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm table-fit-content text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credit</th>
                                    <th>Fees</th>
                                    <th>Total Amount</th>
                                    <th>Course Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1;
                                    $totalcredits= 0;
                                    $totalamounts = 0;

                                @endphp
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td> <input type='text' name="course[{{$i}}][course_code]" value="{{$course->course_code}}"> </td>
                                    <td> <input type="text" name="course[{{$i}}][course_title]" value="{{$course->course_title}}"> </td>
                                    <td> <input type="text"id="credit" name="course[{{$i}}][credit]" value="{{$course->credit}}"> </td>
                                    <td> <input type="text" name="course[{{$i}}][fees]" value="{{$course->fees}}"></td>
                                    <td> <input type="text"  id="total_fees" name="course[{{$i}}][total_fees]" value="{{$course->total_fees}}"> </td>
                                    <td>
                                        <select name="course[{{$i}}][course_type]" id="type">
                                            <option value="New">New</option>
                                            <option value="Retake">Retake</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning remove">Remove</button>
                                    </td>
                                    @php
                                        $totalcredits += (float)$course->credit;
                                        $totalamounts+=(float)$course->total_fees;
                                    @endphp
                                </tr>

                            </tbody>
                           
                            @endforeach
                            <tfooter>
                                <tr>
                                    <td colspan="2" class="text-left"></td>
                                    <td><b>Total Credit</b></td>
                                    <td <input type="text" name="total_credit" value="{{$totalcredits}}"><b>{{$totalcredits}}</b></td>
                                    <td colspan="1"><b>Total Amount</b></td>
                                    <td <input type="text" name="total_amount"  value="{{$totalamounts}}"><b>{{$totalamounts}}</b></td>
                                    <td colspan="2"></td>
                                </tr>
                            </tfooter>
                            
                        </table>
                    </div>
                    @endisset
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Add this script at the end of your Blade file -->

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
