<?php
ob_start();
session_start();
require 'link.php';
if (isset($_SESSION['user']) != "") {
    header("Location: index.php");
}


  if(isset($_POST['signup']))
  {
      $fname = trim($_POST['fname']); // get posted data and remove whitespace
      $lname = trim($_POST['lname']);
      $pass =  md5($_POST['pass']);//already hashed
      $user = trim($_POST['user']);
      $sql = "insert into profile (fname, lname, password, username) 
      values ('$fname','$lname', '$pass', '$user'  )";  
      $result = mysqli_query($conn,$sql);
      if($result)
            {
              $message = "Saved" ;
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo '<script type="text/javascript">
                    window.location.href="register.php";
                </script>';
            }
            else
            {
              echo mysqli_error($conn);
            }
  }
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php require("link.php");?>
<title>Register</title>
</head>

<body class="bg-dark">
  <div class="container-fluid"  id="main">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Create a Username</div>
      <div class="card-body">
        <form method="post" autocomplete="off" action="register.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control"  type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="fname" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lname" required>
              </div>
            </div>
          </div>
          <div class="form-group"> 
            <div class="form-row"> 
              <div class="col-md-6">         
                  <label for="exampleInputLastName">Username</label>
                  <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="user" required>
              </div>
              <div class="col-md-6">
              <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="upass" type="password" placeholder="Password" required name="pass"required>
              </div>
          </div>           
          </div>          
          
          <div class="form-group">
            
              
            </div>
          </div>
          <div class="form-group">
          <button type="submit" class="btn    btn-block btn-primary" name="signup" id="reg" >Register</button>
      </div>
          <a class="btn btn-primary btn-block" href="login.php">Login</a>

        </form>
        <div class="text-center" id="reg">
          <!-- <a class="d-block small mt-3" href="login.php">Login Page</a> -->
          <p></p>
         </div>
      </div>
    </div>
  </div>
 
</body>

</html>
