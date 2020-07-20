<?php
session_start();
include("connectiondb.php");
$email=$_POST["button"];
$s="update rider set BookID='".$_SESSION["Email"]."' where Email='";
$check=mysqli_query($con,$s);
header("location:dashboardbooked.php");
?>