<?php
include("connectiondb.php");
if(isset($_POST["signup"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["cpassword"];
	$city=$_POST["city"];
	$role=$_POST["r1"];
	if($password==$confirmpassword)
	{
		$sql="insert into rider(EmailID,Name,Password,City,Role,ProfilePic) values('".$email."','".$name."','".$password."','".$city."','".$role."','default.png')";
		$check=mysqli_query($con,$sql);
		if($check!=0)
			$message="<font style='color:green;'>Registered Successfully</font>";
		else
			$message="<font style='color:red;'>Unable To Register.Please Try Again</font>";
	}
	else
		$message="<font style='color:red;'>Password And Confirm Password Should Match</font>";
}
?>
<!DOCTYPE html>
<html>
<head>
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
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
</head>
<body>
	<?php
	include("header.php");
	?>
	<table style="height: 400px;">
		<form method="post" action="<?php $_PHP_SELF ?>">
			<tr><th colspan="2">Register Here</th></tr>
			<tr><td>Name</td><td><input type="text" name="name" required></td></tr>
			<tr><td>Email-Id</td><td><input type="email" name="email" required></td></tr>
			<tr><td>Password</td><td><input type="password" name="password" required></td></tr>
			<tr><td>Confirm Password</td><td><input type="password" name="cpassword" required></td></tr>
			<tr><td>City</td><td><input type="text" name="city"></td></tr>
			<tr><td>I am a ...</td><td><input type="radio" name="r1" value="Taxi Driver">Taxi Driver<input type="radio" name="r1" value="Rideshare Driver">Rideshare Driver<input type="radio" name="r1" value="Rider">Rider</td></tr>
			<tr align="center"><td colspan=2><button class="btn btn-primary mt-2" type="submit" name="signup">Sign Up</button></td></tr>
		</form>
	</table>
	<div class="message m-5">
		<?php
		if(isset($message))
		{
			echo $message;
		}
		?>
	</div>
	<?php
	include("footer.php");
	?>
</body>
</html>