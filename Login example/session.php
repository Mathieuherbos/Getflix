<?php

include_once "db1.php";

session_start();

   $userCheck = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
      echo "not logged in";
   }
   else {echo "logged in";};
?>