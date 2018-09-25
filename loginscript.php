<?php      
   
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include "dbconnect.php";
    if(isset($_POST['login']))
    {    
        $user = trim($_POST['user']);
        $pass =  md5($_POST['pass']);//already hashed
      //authentication
      $sql = "select * from profile  where username = '$user' AND password = '$pass'";
      $result = mysqli_query($conn,$sql);
      if($result)
      {    
        // if(mysqli_num_rows($result)>0){
            echo"welcome".$user;
            $message = "Welcome".$user;
            echo "<script type='text/javascript'>alert('$message');</script>";
                    
            $_SESSION['user'] = $user;
            if(isset($_SESSION['user']))
                {
                   
                    header("location:index.php");   
                }
                else
                { 
                   
                    echo '<script>window.location.href="login.php";</script>';
                 }
            
            }
        
            else
            {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            
            }
        }
    // }
    ?>
   