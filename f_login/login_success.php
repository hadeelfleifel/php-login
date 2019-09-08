<?php  
 //login_success.php  
 session_start();  
 

      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="setting.php">Account Information</a>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  


  
     //  header("location:pdo_login.php");  
  
 ?> 