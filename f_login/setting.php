<!DOCTYPE html>  
 <html>  
      <head>  
           <title> PHP SignUp</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body> 
           <br />  
           <div class="container" style="width:500px;">  
                   

                <h1 >Account Setting</h1><br />  
                <form method="post">  
                
                
                <label>Username :</label>  
                <?php
                    session_start();
                     if(isset($_SESSION["username"]))  {
                        echo '<b><i>'.$_SESSION["username"].'</i></b>';  

                    }
                   
                ?>
                     <br />
                
                 
                     <label>Email :</label>  

                     <?php
                    session_start();
                     if(isset($_SESSION["email"]))  {
                        echo '<b><i>'.$_SESSION["email"].'</i></b>';  

                    }
                   
                ?>
                     <br />

                      
                <label>Password :</label>  

                <?php
                    session_start();
                     if(isset($_SESSION["password"]))  {
                        echo '<b><i>'.$_SESSION["password"].'</i></b>';  

                    }
                   
                ?>
                     <br />
                
                
                
                
                <br/> 
                <?php
                     echo '<br /><br /><a href="info.php">Edit Information</a>';  
                            
                            echo '<br /><br /><a href="delete.php">Delete Account</a>'; 
                            
                            echo '<br /><br /><a href="login_success.php">Back ...</a>';  

                                ?>
                </form>  
              
           </div>  
           <br />  
      </body>  
 </html> 