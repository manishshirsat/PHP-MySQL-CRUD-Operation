<?php
include('../includes/config.php');


if (isset($_POST['update'])) {
    $id= $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];
  
    $sql = "UPDATE user_info SET FirstName='$fname', LastName='$lname', Age='$age', Mobile='$mobile', Email='$email', City= '$city', Gender= '$gender' WHERE id= '$id'";
  
    if ($conn->query($sql) == TRUE) {
        header("location: dashboard.php?success= Record Updated Successfully");
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

}

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select * FROM user_info WHERE id='$id'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $id = $row['id'];
                $fname = $row['FirstName'];
                $lname = $row['LastName'];
                $age = $row['Age'];
                $mobile = $row['Mobile'];
                $email = $row['Email'];
                $city = $row['City'];
                $gender = $row['Gender'];
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="main-div container">
    <h2 class="head-text">Update Details</h2>
        <form action="" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>First Name</label>   <br>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" >
                    </div>
                    <div class="col">
                        <label>Last Name</label>   <br>
                        <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Age</label>  <br>
                <input type="number" name="age" class="form-control" value="<?php echo $age; ?>" >
            </div>
            <div class="form-group">
                <label>Mobile</label>  <br>
                <input type="number" name="mobile" class="form-control" value="<?php echo $mobile; ?>" >
            </div>
            <div class="form-group">
                <label>Email</label>  <br>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" >
            </div>
            <div class="form-group">
                <label>City</label>  <br>
                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" >
            </div>
            <div class="form-group">
                <label>Gender</label>  <br>
                <div class="form-control gender">
                    <select name="gender">
                        <option class="form-control">Select</option>
                        <option value="Male"
                        <?php if($gender== "Male") { echo "selected"; } ?>
                        >
                        
                        Male</option>
                        <option value="Female" 
                        <?php if($gender== "Female") echo "selected"; ?>
                        >
                            
                        Female</option>
                        <option value="Other"
                        <?php if($gender== "Other") { echo "selected"; } ?>
                        >
                            
                        Other</option>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="update" class="btn btn-primary" value="Update">
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
    <?php
    }
}

?>

