<?php
include 'connection.php';
error_reporting(0);

if($_GET['submit']){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $country=$_GET['country'];
    $year=$_GET['year'];
    $size=$_GET['size'];
    $count=$_GET['count'];
    $glued=$_GET['glued'];
    
    // Sanitize our inputs
    // $name = mysql_real_escape_string($name);


    $query =  "UPDATE stamp SET NAME='$name', country='$country',year='$year',size='$size', count='$count',glued='$glued' WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "<font color='green'>Record Updated Successfuly. <a href='admin.php'>Check Updated List here</a>";
    }
    else{
        echo "<font color='blue'>Record not Updated";
    }
}
else{
    echo "<font color='blue'>Click on Button to save the Changes";
}

?>