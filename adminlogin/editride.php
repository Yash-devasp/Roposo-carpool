<?php
include("connectiondb.php");
if(isset($_POST["btn"]))
{
	$email=$_POST["email"];
    $name=$_POST["name"];
    $city=$_POST["city"];
    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $Price=$_POST["price"];
    $Date=$_POST["date"];
    $bookid=$_POST["BookID"];
    $sql="UPDATE rider SET Name=$name,City=$city,Source=$source,Destination=$destination,Price=$Price,Date=$Date,BookID=$bookid WHERE EmailID=$email";
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
    <h3 class="mb-3">Edit The Ride</h3>
    <form action="<?php $_PHP_SELF ?>" method="post"><div class="mb-2"><input type="email" name="emailid" placeholder="Enter Email-Id"></div><button name="button" type="submit" class="btn btn-primary">Submit</button></form>
    <table align="center" width="80%" style="margin-top: 100px;">
      <tr><th>Email Id</th><th>Name</th><th>City</th><th>Source</th><th>Destination</th><th>Price</th><th>Date</th><th>Book ID</th></tr>
      <form method="post" action="<?php $_PHP_SELF ?>">
      <?php
      include("connectiondb.php");
      if(isset($_POST["button"]))
      {
      $s="select * from rider where EmailID='".$_POST["emailid"]."'";
      $rs=mysqli_query($con,$s);
      $v=mysqli_fetch_assoc($rs);
      echo "<tr><td><input name='email' read-only value='".$v["EmailID"]."'></td><td><input name='name' value='".$v["Name"]."'></td><td><input name='city' value='".$v["City"]."'></td><td><input name='source' value='".$v["Source"]."'></td><td><input name='destination' value='".$v["Destination"]."'></td><td><input name='price' value='".$v["Price"]."'></td><td><input name='date' value='".$v["Date"]."'></td><td><input name='bookid' value='".$v["BookID"]."'></td></tr><tr><td align=center colspan=8><button class='btn btn-primary' name='btn'>Edit Detail</button></td></tr>";
  }
      ?>
    </table>
</form>
	</body>
	</html>