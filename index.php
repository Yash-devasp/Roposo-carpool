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
	<body>
		<?php
		include("header.php");
		?>
		<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Carpool" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="text-dark">Smart</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.webp" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="text-dark">Simple</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="text-dark">Seamless</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container-fluid background">
  <div><h3 class="mx-5 pb-3">Where do you want to go?</h3></div>
  <div class="cardmargin">
  <div class="card-deck">
    <div class="card">
      <div class="card-body d-flex text-dark">
        <div class="mx-5">Delhi >> Kanpur</div>
        <div class="mx-5">₹500</div>
      </div>
    </div>
      <div class="card">
      <div class="card-body d-flex text-dark">
        <div class="mx-5">Delhi >> Chandigarh</div>
        <div class="mx-5">₹500</div>
      </div>
    </div>
      <div class="card">
      <div class="card-body d-flex text-dark">
        <div class="mx-5">Kanpur >> Lucknow</div>
        <div class="mx-5">₹500</div>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="back">
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <div><img src="images/choice.png" width="64px"></div>
        <h4>Choice</h4>
        We go everywhere. Literally thousands of destinations. No station required.
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div><img src="images/icons8-id-verified-64.png"></div>
        <h4>Carpool with confidence</h4>
        Government ID verification adds another level of security to member profiles.
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div><img src="images/icons8-map-pin-64.png"></div>
        <h4>Get going faster</h4>
        No need to travel across town, catch a ride leaving near you.
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>
	</body>
	</html>