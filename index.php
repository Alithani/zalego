<<!DOCTYPE html>
    <html>

    <head>
        <?php
require("header.php");
require("footer.php");?>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/mycss.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script href="vendor/bootstrap/js/bootsrap.js" rel="text/javascript">
            <script href="vendor/jquery/jquery.js" rel="text/javascript">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8" />

    </head>

    <body>

        <div class="container-fluid">
            <div class=" bg-info row clearfix">
                <div class="col-md-12 column">
                    <div>
                        <br>
                        <div class="panel-group white" id="panel-profile">
                            <div class="panel panel-default white">
                                <div class="panel-heading white">
                                    <center>
                                        <a class="panel-title">Details</a>
                                    </center>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-3" id="right-col" style="background-color:silver;"> 
                                            <div class="card card-body">
                                                <h4 class="card-title">Profile photo</h4>
                                                <img class="img-responsive" src="images/1.jpg" height="30%">
                                            </div>
                                        </div>
                                        <div class="col-sm-9" id="right-col" style="background-color:#F4A460;">information
                                            <div class="card card-body">
                                                <h4 class="card-title">General Information</h4>
                                                <p class="card-text">First Name:</p><?php?>
                                                <p class="card-text">Last Name:</p><?php?>
                                                <p class="card-text">Gender:</p><?php?>
                                                <p class="card-text">Email:</p><?php?>
                                                <p class="card-text">Department:</p><?php?>
                                                <p class="card-text">Profession:</p><?php?>
                                                <p class="card-text">Extension Number:</p><?php?>
                                                
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
    </body>

    </html>