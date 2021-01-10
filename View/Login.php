<!DOCTYPE html>

<?php 
	require_once '../Model/dbConnection.php';
	require_once '../Controller/Login.php';
	?>

<html class="signInBG">

<head>
	<?php include_once '../includes/header.php' ?>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
</head>

<body>

	<div id="wrapper1">
		<div>
			<div class="logo"><img src="./Images/logojoab.png" class="" alt="" /></div>
			<ul>
					<li><a href="Home.php">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="ClientTestimonials.php">Client Testimonials</a></li>
					<li><a href="Login.php">Login</a></li>
				</ul>
		</div>
	</div>

	<div class="square">

		<form method="post">
			<div class="form-group">
                <div class="col">
                    <label for="Username">Username</label>
                    <input type="Username" name="Username" class="form-control" placeholder="Username">
			</div>
			<br>
			<div class="form-group">
                <div class="col">
                    <label for="Password">Password</label>
                    <input type="Password" name="Password" class="form-control" placeholder="Password">
            </div>
			<br>
			<div class="col-md-12 text-center">
			<button type="submit" name="log" class="btn btn-primary btn-lg">Login</button>
                        <a href="Signup.php" class="btn btn-secondary btn-lg" >Sign up </a>
            </div>
		</form>

</div>

</body>

</html>