<?php
include 'connection.php';

if($_POST['submit']){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $country=$_POST['country_fk'];
    $year=$_POST['year'];
    $size=$_POST['size'];
    $count=$_POST['count'];
    $glued=$_POST['glued'];
    $collector_fk=$_POST['collector_fk'];
    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $folder= "images/".$filename;
    move_uploaded_file($tempname,$folder);

   if($id!="" && $name!="" && $country!="" && $year!="" && $size!="" && $count!="" && $glued!="" && $filename!=""){
    $query = "INSERT INTO STAMP VALUES ('$id','$name','$country','$year','$size','$folder','$count','$glued','$collector_fk')";
       $data = mysqli_query($conn, $query);

       if($data){
        echo "<font color='green'>Record Updated Successfuly.";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
        <?php
       }
    }else{
       echo "all field are requred";
    }
}
mysqli_close($conn);
?>