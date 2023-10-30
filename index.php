<?php
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      ' New Record Insert Suceesss '
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }
    ?>

    <section class="main-container">
        <h2 class="mb-3">Registration Form</h2>
        <form action="./includes/register.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>First Name</label>   <br>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                    </div>
                    <div class="col">
                        <label>Last Name</label>   <br>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Age</label>  <br>
                <input type="number" name="age" class="form-control" placeholder="Enter Age" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>  <br>
                <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
            </div>
            <div class="form-group">
                <label>Email</label>  <br>
                <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>City</label>  <br>
                <input type="text" name="city" class="form-control" placeholder="Enter City" required>
            </div>
            <div class="form-group">
                <label>Gender</label>  <br>
                <div class="gender">
                        <input type="radio" name="gender"  class="form-check-input" value="Male" required>Male
                        <input type="radio" name="gender" id="gender" class="form-check-input" value="Female" required>Female
                        <input type="radio" name="gender" id="gender" class="form-check-input" value="Other" required>Other
                </div>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
            <a href="./admin/dashboard.php" class="mx-4 dashboard">View Record</a>
        </form>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
