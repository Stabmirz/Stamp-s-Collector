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
    <h1 style=" margin:50px 0 0 300px">Edit Stamp Information</h1>
   <form action="updatesubmit.php" method="GET" id ="form">
        Id <br><input type="text" name="id" value="<?php echo $_GET['id'];?>"><br><br>
        Name <br><input type="text" name="name" value="<?php echo $_GET['name'];?>"><br><br>
        Country <br><input type="text" name="country" value="<?php echo $_GET['country'];?>"><br><br>
        Year<br><input type="text" name="year" value="<?php echo $_GET['year'];?>"><br><br>
        Size<br><input type="text" name="size" value="<?php echo $_GET['size'];?>"><br><br>
        Stock<br><input type="text" name="count" value="<?php echo $_GET['count'];?>"><br><br>
        Glued to Album?<br><input type="text" name="glued" value="<?php echo $_GET['glued'];?>"><br><br>
        Upload Image <br><br><input type="file" name="uploadfile" value="<?php echo $_GET['pic_src'];?>"><br><br>
        <input type="submit" name="submit" value="submit">
   </form>
   <div style=" padding-bottom:100px"></div>
</div>
<?php include('partials/footer.php');?>