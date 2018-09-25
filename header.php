<?php  
   require 'link.php';
   require 'session.php';
   include('datadisplay.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>CRM</title>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top navbar-inverse">
    <!-- <a class="navbar-brand" href="index.php">Customer Support System</a> -->
      <div class="container" id="navmain">
       
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><i class="fa fa-user-circle-o"></i> Profile</a>
            </li>
            
              </a>
              
              </div>
                    
        </div>  
        <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal" id="btnlogout"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
         
        </div>
      </div>
    </nav>
    <body>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
          </button>
        </div>
        <div>
                  
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
            <form method="post">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>            
              <a type="submit" class="btn btn-primary" href="logout.php" name="logout">Logout</a> 
              </div></div></div></div>
              </form>