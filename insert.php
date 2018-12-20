<?php
include 'connection.php';
error_reporting(0);

$userprofile =$_SESSION['email'];
if($userprofile == TRUE) {

} else {
   header('location:login.php');
}
include 'partials/aheader.php';
?>

<div class="main">
    <h1 style=" margin:50px 0 0 0px">Add New Stamp to the Album</h1>
   <form action="insertsubmit.php" method="post" enctype="multipart/form-data" id="form">
        Id <br><input type="text" name="id" value=""><br><br>
        Name <br><input type="text" name="name" value=""><br><br>
        Country <br><input type="text" name="country_fk" value=""><br><br>
        Year<br><input type="text" name="year" value=""><br><br>
        Size<br><input type="text" name="size" value=""><br><br>
        Stock<br><input type="text" name="count" value=""><br><br>
        Glued to Album?<br><input type="text" name="glued" value=""><br><br>
        Collector<br><input type="text" name="collector_fk" value=""><br><br>
        Upload Image <br><br><input type="file" name="uploadfile" value=""/><br><br>
       <input type="submit" name="submit" value="submit">
   </form>
   <div style=" padding-bottom:100px"></div>
</div>

<?php
include('partials/footer.php');
?>