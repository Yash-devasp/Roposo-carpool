<?php
include("connectiondb.php");
if(isset($_POST["button"]))
{
$email=$_POST["emid"];
$password=$_POST["pass"];
include("select.php");
if($values["Password"]==$password)
{
    session_start();
    $_SESSION["Email"]=$email;
	header("location:logedin/dashboard.php");
}
else
	$message="<font style='color:red;'>Invalid Email ID or Password</font>";
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
<link rel="stylesheet" href="signin.css">
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
</head>
<body class="text-center">
	<?php
	include("header.php");
	?>
	<form method="POST" action="<?php $_PHP_SELF ?>">
            <div class="form-group">
                <img src="images/logo.png" width="75px" height="75px" alt="Portal Icon" class="mb-3">
            </div>
            <div class="form-group">
                <h1 class="mb-3 h3 font-weight-normal">Please Sign In</h1>
            </div>
            <div class="form-group">
                <label for="emailbox" class="sr-only">E-Mail Address</label>
                <input name="emid" type="email" placeholder="Email Address" id="emailbox" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="passwordbox" class="sr-only"></label>
                <input name="pass" type="password" placeholder="Password" id="passwordbox" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <a href="#" style="font-weight: 500;">Forget Password</a>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" name="button" type="submit">Sign In</button>
            </div>
            <div class="form-group">
                <p class="text-muted mt-5 mb-3">&copy; Roposo Ride</p>
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