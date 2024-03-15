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
                <div class="card-header"><center><h2>Department Create Page</h2></center></div>
                <div class="card-body">
                    <form action="{{route('Backend.department.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for='department Name' class='form-label'>Department Name</label>
                                <input type='text' name='department_name' class='form-control'>
                            </div>
                            <div class="col-md-6">
                                <label for='department Name' class='form-label'>Department Creator Name</label>
                                <input type='text' name='department_creator' class='form-control'>
                            </div>
                            <div class="col-md-6">
                                <label for='department Name' class='form-label'>Department Code</label>
                                <input type='text' name='department_code' class='form-control'>
                            </div>
                            <div class="col-md-6">
                                <label for='department Name' class='form-label'>Submit Button</label>
                                <button type='submit' class='btn btn-md btn-primary form-control'>Add Department</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br>
           
            <div class="card">
                <div class="card-header"><center><h2>Department List</h2></center></div>
                <div class="card-body">
                   <table class='table table-bordered text-center'>
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Department Name</th>
                            <th>Department Creator Name</th>
                            <th>Department Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $i=1;
                        @endphp
                    @foreach($departments as $department)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$department->department_name}}</td>
                            <td>{{$department->department_creator}}</td>
                            <td>{{$department->department_code}}</td>
                            <td>
                                <a href='' class='btn btn-warning'>Edit</a>
                                <a href='' class='btn btn-danger'>Delete</a>
                            </td>
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
