<?php
session_start();
if(isset($_POST["button"]))
{
	$source=$_POST["source"];
	$destination=$_POST["destination"];
	$date=$_POST["date"];
	$price=$_POST["price"];
	include("connectiondb.php");
	$s="update rider set Source='".$source."', Destination='".$destination."', Date='".$date."', Price='".$price."' where EmailID='".$_SESSION["Email"]."'";
	$check=mysqli_query($con,$s);
	if($check!=0)
	{
		$message="<font style='color: green;'>Ride Added Successfully</font>";
	}
	else
		$message="<font style='color: red;'>Unable To Add Ride</font>";
}
?>
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
		<form method="post" action="<?php $_PHP_SELF ?>">
			<h5>Offer a ride on your next long journey</h5>
			<div class="card mb-4">
				<div class="card-header">Pick-up and drop-off points</div>
				<div class="card-body">
					<input type="text" name="source" class="form-control mb-4" placeholder="Source" required>
					<input type="text" name="destination" class="form-control" placeholder="Destination" required>
				</div>
			</div>
			<div class="card">
				<div class="card-header">Date And Price</div>
				<div class="card-body"><input type="text" name="date" class="form-control mb-2" placeholder="dd-mm-yy" required>
					<input type="text" name="price" class="form-control mb-2" placeholder="Price" required>
					<button class="btn btn-primary btn-block" type="style" name="button">Offer Ride</button>
				</div>
			</div>
		</form>
	</div>
	</div>
	<div>
		<?php
		if(isset($message))
			echo $message;
		?>
	</div>
	<?php
	include("footer.php");
	?>
	</body>
	</html>