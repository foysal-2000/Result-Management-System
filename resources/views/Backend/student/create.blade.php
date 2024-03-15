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
                    
                <div class="card mt-2">
                    <div class="card-header"><center><h2>Student Information</h2></center></div>
                    <div class="card-body">
                        <form action="{{route('Backend.student.store')}}" method='post' enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="col-md-3">
                                    <label for='roll' class='form-label'><b>Roll Number</b></label>
                                    <input type="number" name="roll" id="roll" class='form-control'>
                                </div>
                                <div class="col-md-3">
                                    <label for='register' class='form-label'><b>Registration Number</b></label>
                                    <input type="number" name="register" id="register" class='form-control'>
                                </div> 
                                <div class="col-md-4">
                                    <label for='email' class='form-label'><b>Student Email</b></label>
                                    <input type="email" name='student_email' id="student_email" class='form-control'>
                                </div> 
                                <div class="col-md-2">
                                    <label class="form-label">Generate Button</label>
                                    <button type="button" id='generate' class='form-control btn btn-md btn-primary' onclick="generateSerializedRandomValues()">Generate</button>
                                </div> 
                            </div>      
                
                            <div class="row"> 
                                <div class="col-md-4">
                                    <label for='student image' class='form-label'><b>Student Photo</b></label>
                                    <input type="file" name="image" id="image" class='form-control'>
                                </div>
                                <div class="col-md-4">
                                    <label for='roll' class='form-label'><b>Student Name</b></label>
                                    <input type="text" name="student_name" id="student_name" class='form-control'>
                                </div>
                                <div class="col-md-4">
                                    <label for='register' class='form-label'><b>Father Name</b></label>
                                    <input type="text" name="father_name" id="roll" class='form-control'>
                                </div> 
                                <div class="col-md-4">
                                    <label for='roll' class='form-label'><b>Mother Name</b></label>
                                    <input type="text" name="mother_name" id="roll" class='form-control'>
                                </div>
                                <div class="col-md-4">
                                    <label for='student phone' class='form-label'><b>Student Phone Number</b></label>
                                    <input type="text" name="student_phone" id="student_phone" class='form-control'>
                                </div>
                                <div class="col-md-4">
                                    <label for='dateofbirth' class='form-label'><b>Date of Birth</b></label>
                                    <input type="date" name="dateofbirth" id="dateofbirth" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='school_name' class='form-label'><b>School name-1</b></label>
                                    <input type="text" name="school_name" id="school_name" class='form-control'>
                                </div>
                                <div class="col-md-3">
                                    <label for='eiin_1' class='form-label'><b>EIIN Code-1</b></label>
                                    <input type="text" name="eiin_1" id="eiin_1" class='form-control'>
                                </div>
                                <div class="col-md-3">
                                    <label for='gpa_1' class='form-label'><b>GPA-1</b></label>
                                    <input type="text" name="gpa_1" id="gpa_1" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='passing_year' class='form-label'><b>Passing Year-1</b></label>
                                    <input type="text" name="passing_year" id="passing_year" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='school_name_2' class='form-label'><b>School name-2</b></label>
                                    <input type="text" name="school_name_2" id="school_name_2" class='form-control'>
                                </div>
                                <div class="col-md-3">
                                    <label for='eiin_2' class='form-label'><b>EIIN Code-2</b></label>
                                    <input type="text" name="eiin_2" id="eiin_2" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='gpa_2' class='form-label'><b>GPA-2</b></label>
                                    <input type="text" name="gpa_2" id="gpa_2" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='passing_year_2' class='form-label'><b>Passing Year-2</b></label>
                                    <input type="text" name="passing_year_2"  class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='gardian_name' class='form-label'><b>Gardian Name</b></label>
                                    <input type="text" name="gardian_name" id="Gardian_Name" class='form-control'>
                                </div>
                                <div class="col-md-3">
                                    <label for='gardian_phone' class='form-label'><b>Gardian Phone Number</b></label>
                                    <input type="text" name="gardian_phone" id="Gardian_Phone_Number" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='gardian_profession' class='form-label'><b>Gardian Profession</b></label>
                                    <input type="text" name="gardian_profession" id="Profession" class='form-control'>
                                </div> 
                                <div class="col-md-3">
                                    <label for='relation_with_gardian' class='form-label'><b>Relation With Gardian</b></label>
                                    <select id="relation_with_gardian" class='form-control' name='relation_with_gardian'>
                                        <option>Select one</option>
                                        <option>Father</option>
                                        <option>Mother</option>
                                        <option>Sister</option>
                                        <option>Brother</option>
                                        <option>Uncle</option>
                                        <option>Aunty</option>
                                        <option>GrandPa</option>
                                        <option>Grandma</option>
                                        <option>Others</option>
                                    </select>
                                </div> 
                                <div class="col-md-3">
                                    <label for='semster' class='form-label'><b>Semster </b></label>
                                    <select  name='semster' id="year" class='form-control'>
                                        <option value=''>Select semster</option>
                                        <option value='Spring'>Spring</option>
                                        <option value='Summer'>Summer</option>
                                        <option value='Fall'>Fall</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for='department' class='form-label'><b>Department </b></label>
                                    <select  name='department' id="year" class='form-control'>
                                        <option value=''>Select a Department</option>
                                        <option value='CSE'>CSE</option>
                                        <option value='EEE'>EEE</option>
                                        <option value='Law'>Law</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for='program' class='form-label'><b>Program </b></label>
                                    <select  name='program' id="year" class='form-control'>
                                        <option value=''>Select a program</option>
                                        <option value='Bsc In CSE'>Bsc In CSE</option>
                                        <option value='Bsc In EEE'>Bsc In EEE</option>
                                        <option value='BA Hons in LAW'>BA Hons in LAW</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="year" class="form-label"><b>Year</b></label>
                                    <select id="year" class="form-control" name="year">
                                        <?php
                                            $currentYear = date("Y");
                                            for ($year = 2000; $year <= 2030; $year++) {
                                            echo "<option value=\"$year\"";
                                            if ($year == $currentYear) {
                                                echo " selected";
                                            }
                                            echo ">$year</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for='batch' class='form-label'><b>Batch Number</b></label>
                                    <select id="year" class="form-control" name="batch">
                                        <?php
                                            $currentYear = date("Y");
                                            for ($year = 1; $year <= 100; $year++) {
                                            echo "<option value=\"$year\"";
                                            if ($year == $currentYear) {
                                                echo " selected";
                                            }
                                            echo ">$year</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for='section' class='form-label'><b>Section</b></label>
                                    <select id="year" class="form-control" name="section">
                                        <?php
                                        $currentYear = date("Y");
                                        $letters = range('A', 'Z');
                                        
                                        foreach ($letters as $letter) {
                                            echo "<option value=\"$letter\"";
                                            if ($letter == $currentYear) {
                                                echo " selected";
                                            }
                                            echo ">$letter</option>";
                                        }
                                        ?>
                                    </select>
                                </div> 
                                <div class="col-md-6">
                                    <label for='mobile_no' class='form-label'><b>Mobile Number</b></label>
                                    <input tyep='text' name="mobile_no" id="mobile_no" class='form-control'>
                                </div> 
                                <div class="col-md-6">
                                    <label for='email' class='form-label'><b>Email Address</b></label>
                                    <input tyep='email' name="email" id="email" class='form-control' placeholder='example@gmail.com'>
                                </div> 
                                <div class="col-md-6">
                                    <label for='present_address' class='form-label'><b>Present Address</b></label>
                                    <textarea name="present_address" id="present_address" class='form-control'></textarea>
                                </div> 
                                <div class="col-md-6">
                                    <label for='parmanent_address' class='form-label'><b>Parmanent Address</b></label>
                                    <textarea name="parmanent_address" id="parmanent_address" class='form-control'></textarea>
                                </div> 
                            </div>
                            <center><button type='submit'   class='btn btn-md btn-primary mt-5'>Create Student</button></center>
                        </form>
                    </div>
                </div>
            </div>

            <script>
            // Check if counters are already stored in local storage
            var rollCounter = localStorage.getItem('rollCounter');
            var registerCounter = localStorage.getItem('registerCounter');

            // If not, initialize with default values
            if (!rollCounter) {
                rollCounter = 2231080001;
                localStorage.setItem('rollCounter', rollCounter);
            }

            if (!registerCounter) {
                registerCounter = 20230001;
                localStorage.setItem('registerCounter', registerCounter);
            }

            function generateSerializedRandomValues() {
                // Generate serialized random values
                var rollNumber = (rollCounter++);
                var registrationNumber = (registerCounter++); // You can adjust the increment as needed
                var studentName = document.getElementById("student_name").value;
                var lastFourDigits = rollNumber.toString().slice(-4);
                var studentEmail = studentName.toLowerCase().replace(/\s+/g, '') + lastFourDigits + "@uttarauniversity.edu.bd";

                // Set the generated values to the input fields
                document.getElementById("roll").value = rollNumber;
                document.getElementById("register").value = registrationNumber;
                document.getElementById("student_email").value = studentEmail;

                // Update counters in local storage
                localStorage.setItem('rollCounter', rollCounter);
                localStorage.setItem('registerCounter', registerCounter);
            }
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
