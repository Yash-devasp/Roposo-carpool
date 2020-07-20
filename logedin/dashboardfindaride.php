<?php
session_start();
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
		<form class="form1" action="<?php $_PHP_SELF ?>" method="post">
			<h4>Find A Ride</h4>
			<div class="form-group">
				<input name="source" type="text" placeholder="Source" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<input name="destination" type="text" placeholder="Destination" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-block" name="search">Search Rides</button>
			</div>
		</form>
		<div>
			<?php
				include("connectiondb.php");
if(isset($_POST["search"]))
{
	$source=$_POST["source"];
	$destination=$_POST["destination"];
	$s="select * from rider where Source='".$source."' and Destination='".$destination."'";
	$rs=mysqli_query($con,$s);
	while($v=mysqli_fetch_assoc($rs)){
		if($v["BookID"]=="")
				echo "<div class='card mb-5 text-align-left' style='text-align: left; box-shadow: 0 .25rem .75rem ; max-width:500px; margin:auto;'><div class='card-body'>
				<div>Name: ".$v["Name"]."</div>
				<div>".$v["Source"]." >> ".$v["Destination"]."</div>
				<div>Date Of Journey:".$v["Date"]."</div>
				<div>Price: ".$v["Price"]."</div>
				<div><form action='book.php' method='post'><button name='button' type='submit' value='".$v["EmailID"]."' class='btn btn-success btn-block'>Book Ride</button></form></div>
				</div></div>";
			}
}
				
			?>
		</div>
	<?php
	include("footer.php");
	?>
	</body>
	</html>