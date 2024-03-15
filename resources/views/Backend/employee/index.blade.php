<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
  <body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><center><h2>Student Information</h2></center></div>
            <div class="card-body">
                <form action='' method='post'>
                    <div class="row"> 
                        <div class="col-md-4">
                            <label for='roll' class='form-label'><b>Roll Number</b></label>
                            <input type="text" name="roll" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-4">
                            <label for='register' class='form-label'><b>Registration Number</b></label>
                            <input type="text" name="register" id="roll" class='form-control'>
                        </div> 
                        <div class="col-md-4">
                            <label class="form-label" >Generate Button</label>
                            <button type="submit" id='generate' class='form-control btn btn-md btn-primary' >Generate</button>
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="col-md-6">
                            <label for='roll' class='form-label'><b>Student Name</b></label>
                            <input type="text" name="student_name" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-6">
                            <label for='register' class='form-label'><b>Father Name</b></label>
                            <input type="text" name="father_name" id="roll" class='form-control'>
                        </div> 
                        <div class="col-md-6">
                            <label for='roll' class='form-label'><b>Mother Name</b></label>
                            <input type="text" name="mother_name" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-6">
                            <label for='register' class='form-label'><b>Date of Birth</b></label>
                            <input type="date" name="dateofbirth" id="roll" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>School name</b></label>
                            <input type="text" name="school_name" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-3">
                            <label for='register' class='form-label'><b>EIIN Code</b></label>
                            <input type="text" name="eiin" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>GPA</b></label>
                            <input type="text" name="gpa_1" id="gpa_1" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>Passing Year</b></label>
                            <input type="text" name="passing_year" id="gpa-_1" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>School name</b></label>
                            <input type="text" name="school_name_2" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-3">
                            <label for='register' class='form-label'><b>EIIN Code</b></label>
                            <input type="text" name="eiin_2" id="roll" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>GPA</b></label>
                            <input type="text" name="gpa_2" id="gpa-_1" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>Passing Year</b></label>
                            <input type="text" name="passing_year_2"  class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='roll' class='form-label'><b>Gardian Name</b></label>
                            <input type="text" name="gardian_name" id="Gardian_Name" class='form-control'>
                        </div>
                        <div class="col-md-3">
                            <label for='register' class='form-label'><b>Gardian Phone Number</b></label>
                            <input type="text" name="gardian_phone" id="Gardian_Phone_Number" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='register' class='form-label'><b>Gardian Profession</b></label>
                            <input type="text" name="gardian_profession" id="Profession" class='form-control'>
                        </div> 
                        <div class="col-md-3">
                            <label for='register' class='form-label'><b>Relation With Gardian</b></label>
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
                            <label for='roll' class='form-label'><b>Semster </b></label>
                            <select id="year" name="year" class='form-control' name='semster'>
                                <option>Select semster</option>
                                <option>Spring</option>
                                <option>Summer</option>
                                <option>Fall</option>
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
                            <label for='roll' class='form-label'><b>Batch Number</b></label>
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
                            <label for='register' class='form-label'><b>Section</b></label>
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
                            <label for='register' class='form-label'><b>Mobile Number</b></label>
                            <input tyep='text' name="mobile_no" id="roll" class='form-control'>
                        </div> 
                        <div class="col-md-6">
                            <label for='roll' class='form-label'><b>Email Address</b></label>
                            <input tyep='email' name="email" id="gpa-_1" class='form-control' placeholder='example@gmail.com'>
                        </div> 
                        <div class="col-md-6">
                            <label for='register' class='form-label'><b>Present Address</b></label>
                            <textarea name="present_address" id="roll" class='form-control'></textarea>
                        </div> 
                        <div class="col-md-6">
                            <label for='roll' class='form-label'><b>Parmanent Address</b></label>
                            <textarea name="parmanent_address" id="gpa-_1" class='form-control'></textarea>
                        </div> 
                    </div>
                    <center><button type='submit'  name='search' class='btn btn-md btn-primary mt-5'>Create Student</button></center>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>

