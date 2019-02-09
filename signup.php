<?php
include 'connection.php';

include 'partials/header.php';
error_reporting(0);
?>

<div class="main">
    <h1>Sign Up</h1>
    <form action="signupsubmit.php" method="post" id="form" required>
        Name*<br><input type="text" name="a_name" value="" required><br><br>
        Email*<br><input type="text" name="email" value="" required><br><br>
        Password*<br><input type="password" name="password" id="myInput" value="" required><br><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <div id ="form" style="padding-bottom:100px ;">Already have an account? <a style="margin-left: 15px; color:crimson;" href="login.php">Login</a></div>

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


