<?php
$sql="select * from rider where EmailID='".$_SESSION["Email"]."'";
$rs=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($rs);
?>