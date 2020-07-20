<?php
session_start();
include("connectiondb.php");
include("select.php");
if(isset($_POST["button"]))
{
	$name=$_POST["name"];
	$city=$_POST["city"];
	$imagename=$_FILES["image"]["name"];
    $imagepath="ProfilePic\\".$imagename;
    move_uploaded_file($_FILES["image"]["tmp_name"], $imagepath);
	$s="update rider set Name='".$name."', City='".$city."', ProfilePic='".$imagename."' where EmailID='".$_SESSION["Email"]."'";
	$check=mysqli_query($con,$s);
	if($check!=0)
	{
		$message="<font style='color: green;'>Profile Updated Successfully</font>";
	}
	else
		$message="<font style='color: red;'>Unable To Update Profile</font>";
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
		<form method="post" action="<?php $_PHP_SELF ?>">
			<h4>Profile Update</h4>
			<div class="form-group">
				<input name="name" type="text" placeholder="Name" class="form-control" value="<?php echo $values['Name']?>" required autofocus>
			</div>
			<div class="form-group">
				<input name="city" type="text" placeholder="City" class="form-control" value="<?php echo $values['City']?>" required autofocus>
			</div>
			<div>Choose Profile: <input type="file" name="image"></div>
			<div class="form-group">
				<button class="mt-3 btn btn-primary btn-block" type="submit" name="button">Update Profile</button>
			</div>
		</form>
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