<!DOCTYPE html>
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
<link rel="stylesheet" href="findaride.css">

	</head>
	<body class="text-center">
		<?php
		include("header.php");
		?>
		<div class="row">
			<div class="col-md-12">
		<form>
			<h5>Offer a ride on your next long journey</h5>
			<div class="card mb-4">
				<div class="card-header">Pick-up and drop-off points</div>
				<div class="card-body">
					<input type="text" name="source" class="form-control mb-4" placeholder="Source">
					<input type="text" name="destination" class="form-control" placeholder="Destination">
				</div>
			</div>
			<div class="card">
				<div class="card-header">Date Of Your Departure</div>
				<div class="card-body"><input type="text" name="data" class="form-control" placeholder="dd/mm/yy"><a href="signin.php"><input type="button" class="btn btn-primary" value="Find A Ride"></a></div>
			</div>
		</form>
	</div>
	</div>
	<?php
	include("footer.php");
	?>
	</body>
	</html>