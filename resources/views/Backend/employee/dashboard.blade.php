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
            <div class="card-header"></div>
            <div class="card-body">
                <form action='' method='post'>
                    <div class="row"> 
                        <div class="col-md-6">
                            <label for='roll' class='form-label'><b>Roll Number</b></label>
                            <input type="text" name="roll" id="roll" class='form-control'>
                        </div>
                        <div class="col-md-6">
                            <label for='register' class='form-label'><b>Registration Number</b></label>
                            <input type="text" name="register" id="roll" class='form-control'>
                        </div> 
                    </div>
                    <center><button type='submit'  name='search' class='btn btn-md btn-primary mt-5'>Search Result</button></center>
                </form>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

