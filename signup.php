<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

	<link rel="stylesheet" type="text/css" href="box.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" type="text/css" href="signup.css">
<script type="text/javascript" src="navbar.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	<script>
	window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	</header>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action=".\db\process.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" required placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" required placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		</select>
    	<input name="phone" class="form-control" required placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		
			<input type="text" name="address"class="form-control" required placeholder="Address">
			
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" required placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="from.html">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
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