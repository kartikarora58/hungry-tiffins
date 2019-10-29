<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="box.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="navbar.js"></script>

</head>
<body>
	<header>
	<div style="background-color: #000000;">
		<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:25px; color: white;margin-left: 400px; margin-top: 5px"></i></a>
		<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" style="font-size:25px; color: white;margin-left:10px;"></i></a>
		<a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram" style="font-size:25px; color: white;margin-left:10px;"></i></a>
		<a href="form.php"><button style="margin-left: 500px; margin-bottom:5px">Login</button></a>
		<a href="signup.php"><button>Sign Up</button></a>
	</div>	
	<nav style="height: 70px; background-color: black" id="navbar">
		<img src="logo.png" width="280px" height="70px" style="float: left;">
		<ul style="display: inline;list-style-type: none;margin-top:-300 px;
		">
			<li><a href="box.html" style="color:white;">Home</a></li>
			<li><a href="box.html#tar" style="color: white">Meal Plans</a></li>
			<li><a href="box.html#tar2" style="color: white">Why Hungry Tiffins</a></li>
			<li><a href="box.html#tar3" style="color: white">Support</a></li>
			<li><button class="bt"><a href="form.php" style="text-decoration: none;">Order Now</a></button></li>
		</ul>
	</nav>
	
</script>
	</header>

<div  class="parallax" style="background-image: url('veggie.jpeg')";>

	<?php
     if(@$_GET['msg']==true)
     {
     	?>
     	<div style="font-size: 50px;color: #a00030;text-align: center;padding-top: 40px;"><?php echo $_GET['msg']; ?></div>
     	<?php
     }

	?>

<form style="width: 400px;margin-left: 540px;padding-top: 80px;" action=".\db\process2.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:#a00030;font-size: 30px;">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted" style="color: white;font-size: 15px;">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 30px;color: #a00030">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary" style="background-color: #a00030;">Submit</button>
</form>
</div>
<footer>
<div style="background-color: black;height:300px;padding:20px;">
	<h1 align="center" style="color: #a00030;">Support</h1>
	<h3 align="center" style="color: white;">For More info and support, Contact Us</h3>
	<br>
	<br>
	<i class='fas fa-mail-bulk' style='font-size:24px;color: white;margin-left: 420px;'>&nbsp;&nbsp;&nbsp;&nbsp;info@hungrytiffins.in</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	<i class='fas fa-phone' style='font-size:24px;color: white;'>&nbsp; 9780312098:Business</i>
	<br>
	<br>
</div>
</footer>
</body>
</html>