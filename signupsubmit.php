<?php include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['a_name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];



    
    // $sql_u = "SELECT * FROM USER WHERE username='$user'";
    $sql_e = "SELECT * FROM `user` WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    //check if user already exist
    // if (mysqli_num_rows($res_u) > 0) {
  	//     echo "Sorry... username already taken"; 	
    //   }else 
    
    if(mysqli_num_rows($res_e) > 0){
        echo "Sorry... email already taken";

        //email validation	
  	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo "Email not Valid";
    }else{

        if($name!="" && $email!="" && $pass!="" ){

            $query = "INSERT INTO USER VALUES ('$id','$name','$email','$pass')";
            $data = mysqli_query($conn, $query);
            if($data){
            header('location:login.php');
            }
        }else{
        echo "<font color='red';>*All field are requred!";
        }
    }
}?>