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
 
      if(isset($_POST["signup"])) {

        if(empty($_POST["username"])  || empty($_POST["password1"])|| empty($_POST["password2"])|| empty($_POST["email"]) ) {
            $message = '<label>All fields are required</label>';  

        }


        else if ($_POST['password1'] != $_POST['password2']) {
            $message = '<label>Password Not Matched</label>';  
        }


         else {
            $sql = "INSERT INTO users (username, password, email)
            VALUES ('$_POST[username]', '$_POST[password1]', '$_POST[email]')";
            var_dump($sql);


            $connect->exec($sql);

            
            // echo "New record created successfully";
            $_SESSION["username"] = $_POST["username"];  
            $_SESSION["password"] = $_POST["password1"]; 
            $_SESSION["email"] = $_POST["email"];  

         header("location:login_success.php");  
         }
            
        

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
           <title> PHP SignUp</title>  
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

                <h3 >PHP SignUp using PDO</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  

                     <label>Password</label>  
                     <input type="password" name="password1" class="form-control" />  
                     <br />  

                     <label>Password Again</label>  
                     <input type="password" name="password2" class="form-control" />  
                     <br />

                     <label>Email</label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />

                     <input type="submit" name="signup" class="btn btn-info" value="SignUp" />  
                </form>  
                <div>
                <p>
                Already Have Account? <a href ="pdo_login.php"> Login<a>
                </p>
                </div>
           </div>  
           <br />  
      </body>  
 </html> 