<?php
if(isset($_POST["btn"]))
{
  $email=$_POST["email"];
  $name=$_POST["name"];
  $password=$_POST["password"];
  $city=$_POST["city"];
  $source=$_POST["Source"];
  $destination=$_POST["destination"];
  $Price=$_POST["Price"];
  $Date=$_POST["Date"];
  include("connectiondb.php");
  $s="insert into rider (EmailId,Name,Password,City,Source,Destination,Price,Date,ProfilePic) values ('".$email."','".$name."','".$password."','".$city."','".$source."','".$destination."','".$Price."','".$Date."','default.png')";
  $check=mysqli_query($con,$s);
  if($check!=0)
  {
    $message="<font style='color:green;'>Ride Added Successfully</font>";
  }
  else
    $message="<font style='color:red;'>Unable To Add The Ride</font>";
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
      <div class="mb-2"><input class="form-control" placeholder="Email Address" type="text" name="email"></div>
      <div class="mb-2"><input class="form-control" placeholder="Name" type="text" name="name"></div>
      <div class="mb-2"><input class="form-control" placeholder="Password" type="text" name="password"></div>
      <div class="mb-2"><input class="form-control" placeholder="City" type="text" name="city"></div>
      <div class="mb-2"><input class="form-control" placeholder="Source" type="text" name="Source"></div>
      <div class="mb-2"><input class="form-control" placeholder="Destination" type="text" name="destination"></div>
      <div class="mb-2"><input class="form-control" placeholder="Price" type="text" name="Price"></div>
      <div class="mb-2"><input class="form-control" placeholder="Date" type="text" name="Date"></div>
      <div><button type="submit" class="btn btn-primary mb-2" name="btn">Enter Ride</button></div>
    </form>
    <div>
      <?php
      if(isset($message))
        echo $message;
      ?>
    </div>
	</body>
	</html>