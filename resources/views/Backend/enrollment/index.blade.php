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
        <div class="card">
            <div class="card-header"><center><h2>Enrollment Form</h2></center></div>
            <div class="card-body">
                <form action="{{ route('Backend.enrollment.searchcourse')}}" method="POST">
                    @csrf
                    <div class="col-md-2">
                        <label for='semester' class='form-label'><b>Semester </b></label>
                        <select name='semster' id="year" class='form-control'>
                            <option value=''>Select semester</option>
                            <option value='Spring' >Spring</option>
                            <option value='Summer'>Summer</option>
                            <option value='Fall'>Fall</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                    <label for='batch' class='form-label'><b>Semester No</b></label>
                        <select id="year" class="form-control" name="semster_no">
                    
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
                        <div class="col-md-4"><br>
                            <button type='submit' class='btn btn-md btn-primary form-control'>Search Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>