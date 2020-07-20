<DOCTYPE html>
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
	<body>
		<?php
		include("header.php");
		?>
    <a style="margin: 50px;" href="dashboardadmin.php"><-Back</a>
    <table align="center" width="80%" style="margin-top: 100px;">
      <tr><th>Email Id</th><th>Name</th><th>City</th><th>Role</th><th>Source</th><th>Destination</th><th>Price</th><th>Date</th><th>Book ID</th></tr>
      <?php
      include("connectiondb.php");
      $s="select * from rider";
      $rs=mysqli_query($con,$s);
      while($v=mysqli_fetch_assoc($rs))
      {
        echo "<tr><td>".$v["EmailID"]."</td><td>".$v["Name"]."</td><td>".$v["City"]."</td><td>".$v["Role"]."</td><td>".$v["Source"]."</td><td>".$v["Destination"]."</td><td>".$v["Price"]."</td><td>".$v["Date"]."</td><td>".$v["BookID"]."</td></tr>";
      }
      ?>
    </table>
	</body>
	</html>