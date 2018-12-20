<?php
session_start();

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $user=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];



    
    $sql_u = "SELECT * FROM USER WHERE username='$user'";
    $sql_e = "SELECT * FROM USER WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    //check if user already exist
    if (mysqli_num_rows($res_u) > 0) {
  	    echo "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
        echo "Sorry... email already taken";

        //email validation	
  	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo "Email not Valid";
    }else{

        if($name!="" && $user!="" && $email!="" && $pass!="" ){

            $query = "INSERT INTO USER VALUES ('$id','$name','$user','$email','$pass')";
            $data = mysqli_query($conn, $query);
            if($data){
            header('location:login.php');
            }
        }else{
        echo "<font color='red';>*All field are requred!";
        }
    }
}
?>
<?php include('partials/header.php')
?>
<div class="main">
    <h1 id="form">Sign Up</h1>
    <form action="" method="post" enctype="multipart/form-data" id="form">
        Name*<br><input type="text" name="name" value=""><br><br>
        Username*<br><input type="text" name="username" value=""><br><br>
        Email*<br><input type="text" name="email" value=""><br><br>
        Password*<br><input type="password" name="password" id="myInput" value="">
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <div id ="form" style=" padding-bottom:100px ;">Have an account? <a href="login.php">Log In</a></div>

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


