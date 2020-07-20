<?php
if(isset($_POST["btn"]))
{
  $email=$_POST["email"];
  include("connectiondb.php");
  $s="delete from rider where EmailID='".$email."'";
  $check=mysqli_query($con,$s);
  if($check!=0)
  {
    $message="<font style='color:green;'>Ride Deleted Successfully</font>";
  }
  else
    $message="<font style='color:red;'>Unable To Delete The Ride</font>";
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
	</head>
	<body style="text-align: center;">
		<?php
		include("header.php");
		?>
    <a style="margin-left: -1400px;" href="dashboardadmin.php"><-Back</a>
    <h3 class="mb-3">Enter Ride Details</h3>
    <form method="post" action="<?php $_PHP_SELF ?>" style="max-width: 350px; margin: auto;">
      <div class="mb-2"><input class="form-control" placeholder="Email Address" type="email" name="email"></div>
      <div><button type="submit" class="btn btn-primary mb-2" name="btn">Delete Ride</button></div>
    </form>
    <div>
      <?php
      if(isset($message))
        echo $message;
      ?>
    </div>
	</body>
	</html>