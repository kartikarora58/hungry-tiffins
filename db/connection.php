<?php

  $server="localhost";
  $user="root";
  $pass="";
  $db="box";
  $con= new mysqli($server,$user,$pass,$db);
  if($con->connect_error)
  {
  	die("connection to database failed\n");
  }
  else
  {
      
  }


?>