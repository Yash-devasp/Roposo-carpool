<?php
$sql="select * from rider where EmailID='".$email."'";
$rs=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($rs);
?>