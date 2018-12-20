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
    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $folder= "images/".$filename;
    move_uploaded_file($tempname,$folder);
    
    // Sanitize our inputs
    // $name = mysql_real_escape_string($name);


    $query =  "UPDATE STAMP SET NAME='$name', COUNTRY='$country',YEAR='$year',SIZE='$size',PIC_SRC='$folder', COUNT='$count',GLUED='$glued' WHERE ID='$id'";
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