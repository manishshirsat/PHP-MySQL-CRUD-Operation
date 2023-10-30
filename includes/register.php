<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  

<?php
include('config.php');

$fname= $lname= $age= $mobile= $email= $city= $gender= "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        $age = test_input($_POST["age"]);
        $mobile = test_input($_POST["mobile"]);
        $email = test_input($_POST["email"]);
        $city = test_input($_POST["city"]);
        $gender = test_input($_POST["gender"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if(!(empty($fname) && empty($lname) && empty($age) && empty($mobile) && empty($email) && empty($city) && emapty($gender))) {
      $sql = "INSERT INTO user_info(FirstName, LastName, Age, Mobile, Email, City, Gender) VALUES('$fname', '$lname', '$age', '$mobile', '$email', '$city', '$gender')";

      if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?msg");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    
    mysqli_close($conn);

?>

</body>
</html>

