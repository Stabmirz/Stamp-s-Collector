<?php
include 'connection.php';
error_reporting(0);


if(isset($_POST['login'])) {
    $user=$_POST['email'];
    $pwd=$_POST['password'];
    $query = "SELECT * FROM USER WHERE email='$user' && password='$pwd' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total;
    if ($total == 1){
        $_SESSION['email'] = $user;
        header('location:admin.php');
    }else{
        echo "login failed";
    }
}

?>