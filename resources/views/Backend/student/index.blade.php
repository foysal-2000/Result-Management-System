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
        <a href="{{route('Backend.enrollment.create')}}">Enrollment</a>
        <a href="{{route('Backend.department.create')}}">Department Create</a>
    </div>

    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">Admitted Student List</div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Semster</th>
                                <th>Semster Number</th>
                                <th>Program</th>
                                <th>Department</th>
                                <th>Credit</th>
                                <th>Fees</th>
                                <th>Total Fees</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach($students as $student)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->roll}}</td>
                    

                                <td>Action</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
