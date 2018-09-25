<?php
      include('loginscript.php'); 
      include('datadisplay.php'); 
     require("header.php");
     
     
        
?>
          
    <!DOCTYPE html>
    <html>

    <head>
       
        <title>Home</title>

    </head>

    <body>
     <div class="container-fluid" id="main">
            <div class=" bg-info row clearfix">
                <div class="col-md-12 column">
                    <div>
                        <br>
                        <div class="panel-group white" id="panel-profile">
                            <div class="panel panel-default white">
                                <div class="panel-heading white">
                                <div><p></p></div>
                                    <center>
                                        <a class="panel-title">Details</a>
                                    </center>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <!-- <div class="col-sm-3" id="right-col" > 
                                         </div> -->
                                        <div class="col-sm-9" id="right-col" ><p></p>
                                            <div class="card card-body">
                                                <h4 class="card-title">General Information</h4>
                                                <p class="card-text">First Name: <?php echo $fname; ?></p>
                                                <p class="card-text">Last Name: <?php echo $lname; ?></p>
                                                <p class="card-text">Username: <?php echo $user;?></p> 
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      