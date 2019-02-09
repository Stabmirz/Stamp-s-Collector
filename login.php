<?php
include 'connection.php';

//  redirect to admin
if($_SESSION['email']) {
    header("Location: admin.php");
} 
include 'partials/header.php';
error_reporting(0);
?>


<div class="main">
    <h1>Login</h1>
    <form action ="loginsubmit.php" method="post" id="form">

        <label>E-mail:</label><br/>
        <input name="email" type="text" required/><br/><br/>

        <label>Password:</label><br/>
        <input name="password" type="password" id="myInput" required/><br><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input name="login" type="submit" value="Login"/>
    </form>
    <div id ="form" style="padding-bottom:100px ;">Not a Member? <a style="margin-left: 15px; color:crimson;" href="signup.php">Sign Up</a></div>
</div>

<?php include('partials/footer.php');?>

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>