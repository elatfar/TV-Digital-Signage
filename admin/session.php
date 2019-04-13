<?php
   include('/opt/lampp/htdocs/tv_kampus/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select USER from user where USER = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USER'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>