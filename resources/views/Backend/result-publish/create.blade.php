<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
            <div class="card">
                <div class="card-header">Result Search </div>
                <div class="card-body">
                <form action="{{route('Backend.result.search')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="roll number" class='form-label'><b>Student ID</b> </label>
                            <input type="text" name="student_id" class='form-control' id='roll' required>
                        </div>
                        <div class="col-md-3">
                            <label for="roll number" class='form-label'><b>Semster</b> </label>
                            <select name="semster" class="form-control" required>
                                <option>Select Semster</option>
                                <option value="spring">Spring</option>
                                <option value="summer">Summer</option>
                                <option value="fall">Fall</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="year" class="form-label"><b>Year</b></label>
                            <select id="year" class="form-control" name="year" required>
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
                            <br>
                            <button type='submit' class='btn btn-md btn-primary form-control mt-2'>Search</button>
                        </div>
                </form>
                    </div>
                
                </div>
            </div><br>
            <div class="card">
                <div class="card-header">Result Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Student ID</label>
                            <input type="number" name="student_id" class="form-control" value="" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Student Name</label>
                            <input type="number" name="student_name" class="form-control" value="" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Semster</label>
                            <input type="number" name="semster" class="form-control" value="" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Grade</th>
                                    <th>Grade Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="hidden" name="course_code" class="form-control" value="" readonly></td>
                                    <td><input type="hidden" name="course_title" class="form-control" value="" readonly></td>
                                    <td><input type="hidden" name="grade" class="form-control" value="" readonly></td>
                                    <td><input type="hidden" name="gpa" class="form-control" value="" readonly></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="d-none"></td>
                                <td class="d-none"></td>
                                <td class="d-none"></td>
                                <td colspan="3" class="text-end">CGPA</td>
                            </tfoot>
                        </table>
                    </div><br>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>