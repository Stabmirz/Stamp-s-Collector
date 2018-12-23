<?php
 include 'connection.php';
 session_start();
 error_reporting(0);

$id=$_GET['id'];
$query ="DELETE FROM stamp WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    header('Location: admin.php');
}
else{
    echo "<font color='red'>Sorry, Delete process failed";
}
?>