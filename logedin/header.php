<div class="d-flex flex-md-row flex-column align-items-center border-btm box-shadow p-3 mb-3">
			<div class="d-flex my-0 mr-md-auto">
		<img src="images/logo.png" width="60px">
		<h5 class="font-weight-normal mt-4 ml-3">Roposo Ride</h5>
	</div>
		<nav>
			<a href="dashboard.php" class="p-2 text-dark">Home</a>
			<a href="dashboardfindaride.php" class="p-2 text-dark"><img src="images/icons8-search-30.png" width="25px"> Find A ride</a>
			<a href="dashboardofferaride.php" class="p-2 text-dark"><img src="images/icons8-plus-50.png" width="25px"> Offer A Ride</a>
		</nav>
		<div class="dropdown">
  <button type="button" class="mx-3 btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
    <?php
    include("connectiondb.php");
    include("select.php");
    echo "<img width=30px src=ProfilePic/".$values["ProfilePic"].">".$values["Name"];
    ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="dashboardbooked.php">My Rides</a>
    <a class="dropdown-item" href="profileUpdate.php">Profile Update</a>
    <a class="dropdown-item" href="passwordChange.php">Password Change</a>
    <a class="dropdown-item" href="Logout.php">Logout</a>
  </div>
</div>
	</div>