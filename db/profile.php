<?php
session_start();
include "connection.php";
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
	</nav>
	<div class="parallax" style="background-image: url('veggie.jpeg');margin-top: px;">
	<?php
	$email=$_SESSION['userid'];
       $sql1="select name,email,phone,address from user where email='$email'";
       $result=$con->query($sql1);
       if($result->num_rows>0)
       	echo "<table align='center' style='padding-top:100px;margin-left:-20px;font-size:30px;'>";
       {
       	while($row=$result->fetch_array())
       	{
       		echo "<tr><td>Name:</td><td>".$row['name']."</td><tr>";
       		echo "<tr><td>E-Mail:</td><td>".$row['email']."</td><tr>";
       		echo "<tr><td>Phone:</td><td>".$row['phone']."</td><tr>";
       		echo "<tr><td>Address:</td><td>".$row['address']."</td><tr>";
       	}
       	echo "</table>";
       }
}
else
{
	header("location:..//form.php");
}





?>