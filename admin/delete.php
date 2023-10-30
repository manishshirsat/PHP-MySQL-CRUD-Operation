<?php
include('../includes/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user_info WHERE id ='$id'";
     
    if ($conn->query($sql) == TRUE) {
        header("location: dashboard.php?msg= Record Deleted Successfully");
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
header("location: dashboard.php");
$conn->close();

?>

