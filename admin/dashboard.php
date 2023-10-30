<?php
include('../includes/config.php'); 

if(isset($_GET['name']))
{
    
    $sql= "Truncate table user_info";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>
        alert('All Data deleted successfully.');
        </script>";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
  
}

if (isset($_GET['success'])) { 
    $msg= $_GET['success'];
    echo "<script> alert('$msg'); </script>";
}

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="result table table-bordered table-striped">
        <div class="table-head">
            <h2>Registered Users</h2>
            <a href="dashboard.php?name='deleteAll'"><button class="btn btn-danger" name="delete">Clear All Data</button></a>
        </div>
        <table>
            <thead table-light>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>City</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
        <?php 
        
        $sql= "select * from user_info";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['FirstName'] . "</td>";
                    echo "<td>" . $row['LastName'] . "</td>";
                    echo "<td>" . $row['Age'] . "</td>";
                    echo "<td>" . $row['Mobile'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['City'] . "</td>";
                    echo "<td>" . $row['Gender'] . "</td>";
                    echo "<td>";
                    echo '<a href="update.php?id='. $row['id'] .'"><span class="fa fa-pencil"></span></i></a>';
                    echo '<a href="delete.php?id='. $row['id'] .'"><span class="fa fa-trash"></span></i></a>';
                    echo "</td>";
                echo "</tr>";
            }
        }
        ?> 
        </tbody>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
