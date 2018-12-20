<?php
include 'connection.php';
include 'partials/aheader.php';
error_reporting(0);?>

<div class="main">
    <h1 id="form">Login</h1>
    <form action ="loginsubmit.php" method="post" id="form">

        <label>E-mail:</label><br/>
        <input name="email" type="text" /><br/><br/>

        <label>Password:</label><br/>
        <input name="password" type="password" id="myInput" />
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input name="login" type="submit" value="Login" />
    </form>
    <div id ="form" style=" padding-bottom:100px ;">Not a Member? <a href="signup.php">Sign Up</a></div>
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