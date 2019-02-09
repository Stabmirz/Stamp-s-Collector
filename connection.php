<?php
   session_start();
   $servername ="localhost";
   $username="collection";
   $password="Password";
   $dbname="collection";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if($conn){
      echo "";
   }
   else
   {
       die("connection failed because".mysqli_connect_error());
   }
?>