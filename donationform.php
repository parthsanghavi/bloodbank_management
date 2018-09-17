<!DOCTYPE html>
<html>
<head>
	<title> Donation Form </title>
	 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="./images/favicon.png">
  <!-- <link rel="stylesheet" type="text/css" href="./css/main.css"> -->


  <style type="text/css">
  
    .panel-primary>.panel-heading {
      background-color: #ad1457;
      color: white;
      border-color: #ad1457;
    }
    .btn {
      background-color: #ad1457;
      color: white;
      width: 125px;
      border-radius: 10px;
      transition: .05s ease-in-out;
    }
    .btn:hover {
      background-color: #9e0045;
      color: white;
      transform: scale(1.05);
    }
    .panel-primary {
      border-color: #ad1457;
    }

    .dform input[type="text"], .dform input[type="email"] {
      width: 95%;
    }

   .col-md-8 {
    /*z-index: -1 !important;*/
   }
  </style>
</head>

<body>

<?php include('./sidenav.php')?>
<div id="main">
  <?php include('./horizontal-nav.php')?>  
 <div class="container">   
 <div class= "col-md-8" style="margin-top: 50px;">
    <div class="panel panel-primary">
      <div class="panel-heading"><b>Donation Form</b></div>
        <div class="panel-body log">
          <div class="dform">
          <form id="form1">
            <div class="form-group has-feedback">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id= "Name" name="name" placeholder="Name">
            </div>
            <div class="form-group has-feedback">
            <label for="Contact">Contact No:</label>
            <input type="text" class="form-control" id= "Contact" placeholder="Contact No." name="contact">
            </div>
            <div class="form-group has-feedback">
            <label for="Address">Address:</label>
            <textarea style="width: 95%;" type="text" class="form-control" id= "Address" placeholder="Address" name="address"></textarea>
            </div>
            <div class="form-group has-feedback">
            <label for="Gender">Gender:</label>
            &nbsp; <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Male
            </label>
            &nbsp; <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Female
            </label>
            </div>
            <div class="form-group has-feedback">
            <label for="Age">Age:</label>
            <input type="text" class="form-control" id= "Age" placeholder="Age" name="age">
            </div>
            <div class="form-group has-feedback">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" id= "Email" placeholder="Email" name="email">
            </div>
            <div class="form-group has-feedback">
            <label for="Weight">Weight:</label>
            <input type="text" class="form-control" id= "Weight" placeholder="Weight" name="weight">
            </div>
            <div class="form-group has-feedback">
            <label for="Blood Group">Blood Group:</label>
             <select class="form-control"  style="width: 95%;">
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                 <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
              </select>
            </div>
            <button type="submit" class="btn" style="margin-bottom: 15px;">Submit</button>
          </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>