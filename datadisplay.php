<?php
    if(!isset($_SESSION['user']) )
  {
    echo '<script>window.location.href="login.php";</script>';             
  }
  else 
  { 
    $set_email =$_SESSION['user'];
   
    //to display fields from db 
    $sql = "select * from profile where username = '".$_SESSION['user']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $id_profile= $row["id"];
            $fname= $row["fname"];
            $lname = $row["lname"];
            //  $pass =  md5($_POST['pass']);//already hashed
            $user1 = trim($_POST['user']);
            $user = $row["username"];
            
        }  
    }
  } 

?>