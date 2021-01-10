<!DOCTYPE html>

<?php 
	require_once '../../Model/dbConnection.php';
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
		</div>
	</div>
	<div class="square">
		<form method="post">
			<div class="form-group">
                <div class="col">
                    <label for="Username">Username</label>
                    <input type="Username" name="Username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
                <div class="col">
                    <label for="Password">Password</label>
                    <input type="Password" name="Password" class="form-control" placeholder="Password">
            </div>
			<div class="md-form">
				<button type="submit" name="log" class="btn btn-primary btn-block">Login</button>
			</div>
		</form>
	</div>
</body>

</html>