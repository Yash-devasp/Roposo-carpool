<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initil-scale=1,shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Roposo Ride</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
	</head>
	<body style="text-align: center;">
		<?php
		include("header.php");
		?>
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">View Details</div>
            <div class="card-body"><form action="detail.php"><button class="btn btn-outline-primary btn-block">Click Here</button></form></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card text-align-center">
            <div class="card-header">Enter A Ride</div>
            <div class="card-body"><form action="enterride.php"><button class="btn btn-outline-primary btn-block">Click Here</button></form></div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">Delete A User</div>
            <div class="card-body"><form action="deleteride.php"><button class="btn btn-outline-primary btn-block">Click Here</button></form></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card text-align-center">
            <div class="card-header">Edit A User Detail</div>
            <div class="card-body"><form action="editride.php"><button class="btn btn-outline-primary btn-block">Click Here</button><form></div>
          </div>
        </div>
      </div>
    </div>
	</body>
	</html>