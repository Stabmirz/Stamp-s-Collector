<?php
 include 'connection.php';
 error_reporting(0);

$id=$_GET['id'];
$query ="DELETE FROM STAMP WHERE ID='$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    header('Location: admin.php');
}
else{
    echo "<font color='red'>Sorry, Delete process failed";
}
?>