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
        <a href="{{route('Backend.course.swc-create')}}">Student wise course register Create</a>
        <a href="{{route('Backend.course.swc-show')}}">Student wise course register  show</a>
    </div>

    <div class="content">
            <div class="container mt-5">
            <a href="{{ route('Backend.course.index')}}" class="btn btn-md btn-primary">Course List</a>
            <div class="card">
           
                <div class="card-header">
                <center><h2>Course Enroll</h2> </center>
                </div>
                <div class="card-body">
                    <form action="{{ route('Backend.course.store') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="course_code" class="form-label"><b>Course Code</b></label>
                                <input type="text" name="course_code" id="course_code" class="form-control">
                            </div>
                            <div class="col-md-8">
                                <label for="course_title" class="form-label"><b>Course Title</b></label>
                                <input type="text" name="course_title" id="course_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="semester" class="form-label"><b>Semester</b></label>
                                <select name="semster" id="semester" class="form-control">
                                    <option value="">Select semester</option>
                                    <option value="Spring">Spring</option>
                                    <option value="Summer">Summer</option>
                                    <option value="Fall">Fall</option>
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
                            <div class="col-md-6">
                                <label for="program" class="form-label"><b>Program</b></label>
                                <select name="program" id="program" class="form-control">
                                    <option value="">Select a Program</option>
                                    <option value="Bsc in CSE">Bsc in CSE</option>
                                    <option value="Bsc in EEE">Bsc in EEE</option>
                                    <option value="Bsc in Civil">Bsc in Civil </option>
                                </select>
                            </div>
                            <div class="col-md-6">
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
                                <label for="credit" class="form-label"><b>Credit</b></label>
                                <select name="credit" id="credit" class="form-control">
                                    <option value="">Select a Credit Hours</option>
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3">3</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4">4</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5">5</option>
                                    <option value="5.5">5.5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="fees" class="form-label"><b>Fees</b></label>
                                <select name="fees" id="fees" class="form-control">
                                    <option value="">Select a Fees Amount</option>
                                    <option value="1000">1000/-</option>
                                    <option value="1250">1250/-</option>
                                    <option value="1500">1500/-</option>
                                    <option value="2000">2000/-</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="fees" class="form-label"><b>Total Fees</b></label>
                                <input type='text' name='total_fees' class='form-control' id='total_fees' readonly>
            
                            </div>
                            <div class="col-12 mt-3">
                                <center><button type="submit" class="btn btn-md btn-primary">Add Course</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Include jQuery (make sure to include it before your custom script) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Function to calculate total fees
        function calculateTotalFees() {
            var credit = parseFloat($('#credit').val());
            var fees = parseFloat($('#fees').val());

            if (!isNaN(credit) && !isNaN(fees)) {
                var totalFees = credit * fees;
                $('#total_fees').val(totalFees.toFixed(2));
            } else {
                $('#total_fees').val('');
            }
        }

        // Event listeners to trigger the calculation when credit or fees change
        $('#credit, #fees').change(function () {
            calculateTotalFees();
        });
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
