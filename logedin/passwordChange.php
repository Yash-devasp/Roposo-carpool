<?php
session_start();
if(isset($_POST["button"]))
{
	$oldpassword=$_POST["oldpassword"];
	$newpassword=$_POST["newpassword"];
	$confirmpassword=$_POST["confirmpassword"];
	include("connectiondb.php");
	include("select.php");
	if($values["Password"]==$oldpassword)
	{
		if($newpassword==$confirmpassword)
		{
			$s="update rider set Password='".$newpassword."' where EmailID='".$_SESSION["Email"]."'";
			$check=mysqli_query($con,$s);
			if($check!=0)
			{
				$message="<font style='color: green;'>Password Updated Successfully</font>";
			}
			else
				$message="<font style='color: red;'>Unable To Update Password</font>";
		}
		else
			$message="<font style='color: red;'>Password And Confirm Password Do Not Match</font>";
	}
	else
	$message="<font style='color: red;'>Your Old Password Did Not Match</font>";
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
			<h4>Change Password</h4>
			<div class="form-group">
				<input name="oldpassword" type="password" placeholder="Enter Old Password" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<input name="newpassword" type="password" placeholder="Enter New Password" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<input name="confirmpassword" type="password" placeholder="Enter Confirm Password" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-block" name="button">Change Password</button>
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