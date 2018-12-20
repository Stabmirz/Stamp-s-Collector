<?php
include 'connection.php';
error_reporting(0);

$account = array(
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password' => 'admin123'
);

if(isset($_POST['login'])) {
    $user=$_POST['email'];
    $pass=$_POST['password'];
    
    if($account['email'] == $user && $account['password'] ==$pass ) {
        $_SESSION['email'] = $user;
        header('Location: admin.php');
    }else{
        echo 'Wrong e-mail or password';
    }
}
?>