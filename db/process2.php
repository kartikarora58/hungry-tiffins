<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select email,password from user";
$result=$con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_array())
	{
		if($email==$row['email'] && $password==$row['password'])
		{
			$success=true;
		}
	}
}
if($success==true)
{
	$_SESSION['userid']=$email;
	header("location:welcome.php");
}
else
{
	echo "incorrect Email OR Password";
}
}
?>