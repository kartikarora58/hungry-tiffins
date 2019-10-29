<?php

include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];
$sql="insert into user(name,email,phone,address,password) values('$name','$email','$phone','$address','$password')";
if($con->query($sql)===true)
{
	header("location:..//form.php?msg=Thanks for registering with hungry tiffins.Please Login to Continue !");
}
else
{
	echo "error 404";
}


?>