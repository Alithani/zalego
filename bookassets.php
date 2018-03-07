<!DOCTYPE html>
<html>
<head><?php
require("header.php");
require("footer.php");
?>
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
        
</head>
<body>
<div class="container-fluid">
  <form class="form-horizontal" role="form" id="frminput">
    <fieldset>
    <center>
      <legend>Submit a ticket</legend></center>
      <div class="form-group" >
        <label class="col-sm-3 control-label" for="card-holder-name">First Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Email</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="card-number" id="" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="tos">Type Of Service</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-4" name="tos" id="tos">
                <option value="SAP">SAP</option></option>
                <option value="Network">Network</option>
                <option value="IT Support">IT Support</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="desc">Description</label>
        <div class="col-sm-3">
           <textarea name="message" style="width:400px; height:200px;"></textarea>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-3 control-label" for="attachment">Attachments</label>
        <div class="col-sm-3">
           <input type="file" name="fileupload" value="fileupload" id="fileupload">
        </div>
      </div>
            <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Priority</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-6" name="expiry-month" id="expiry-month">
                
                <option value="LOW">LOW</option></option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="HIGH"> HIGH</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="button" class="btn btn-success">Submit Ticket</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
</body>
</html>