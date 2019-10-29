<?php
session_start();
if(isset($_SESSION['userid']))
{
	?>
	<link rel="stylesheet" type="text/css" href="box.css">

	<nav style="height: 70px;background-color: gray;border: 1px solid white;border-radius: 600px;" id="navbar">
		<img src="logo.png" width="280px" height="70px" style="float: left;"><br>
		<ul style="display: inline;list-style-type: none;margin-top: 50px;" >
			<li><a href="profile.php" style="color:white;">Profile</a></li>
			<li><a href="" style="color: white">View Order</a></li>
			<li><a href="" style="color: white">Place Order</a></li>
			<li><a href="logout.php" style="color: white;">Logout</a></li>
		</ul>
	</nav><br><br><br><br><br><br><br><br><br><br><br>
    <div style="color: #a00030;font-size: 50px;text-align: center;">Welcome to Hungry Tiffins.<br>Have a nice day!</div>
	<?php
}
else
{
	header("location:..//form.php");
}

?>