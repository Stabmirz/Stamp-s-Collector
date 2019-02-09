<?php
include 'connection.php';


if($_POST['submit']){
    $name=$_POST['name'];
    $country=$_POST['country'];
    $year=$_POST['year'];
    $size=$_POST['size'];
    $count=$_POST['count'];
    $glued=$_POST['glued'];
    $collector=$_POST['collector'];
    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $folder= "images/".$filename;
    move_uploaded_file($tempname,$folder);

   if($name!="" && $country!="" && $year!="" && $size!="" && $count!="" && $glued!="" && $filename!=""){
    $query = "INSERT INTO stamp VALUES ('0','$name','$country','$year','$size','$folder','$count','$glued','$collector')";
       $data = mysqli_query($conn, $query);

       if($data){
        echo "<font color='green'>Record Updated Successfuly.";
        header("Refresh:0; url=admin.php");
       }
    }else{
       echo "all field are requred";
    }
}
mysqli_close($conn);
?>