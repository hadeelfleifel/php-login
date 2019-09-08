<?php  
 session_start();

 $host = "localhost";  
 $username = "root";  
 $password = "password";  
 $database = "users";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

      if($_POST["yes"])  {
                    
            session_start();



            $username=$_SESSION["username"];
            $password=$_SESSION["password"];
          $id=$_GET['id'];


                              $sql = "DELETE * FROM users WHERE username = $username AND password = $password";

            var_dump($sql);



        $connect->exec($sql);

        header("location:pdo_login.php");
    
            }

      if(isset($_POST["no"]))  {
        header("location:login_success.php");  
    
    }

 }
 
 
 
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 
  

<!DOCTYPE html>  
 <html>  
      <head>  
           <title> PHP Login</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body> 


           <br />  
           <div class="container" style="width:500px;">

                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  

                <form method="POST">  
                <h3 >Are you sure you want to delete your Account  ?</h3><br />  
                <br/>

                     <input type="submit" name="yes" class="btn btn-info" value="Delete" />  
                     <br/><br/>
                     <input type="submit" name="no" class="btn btn-info" value="Cancel" />  

                </form>  
                
           </div>  
           <br />  
      </body>  
 </html>  