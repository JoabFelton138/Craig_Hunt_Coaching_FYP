<!DOCTYPE html>
<?php
require_once '../Model/dbConnection.php';
require_once '../Controller/Signup.php';
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
    <div class="square1">
        <form method="post">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Username">Username</label>
                    <input type="text" name="Username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="Password" name="Password" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="inputEmail4">First Name</label>
                    <input type="text" name="First_Name" class="form-control">
                </div>
                <div class="col">
                    <label for="inputEmail4">Last Name</label>
                    <input type="text" name="Last_Name" class="form-control">
                </div>
            </div>

            <div class="form-row">
                    <div class="col">
                        <label for="Contact">Mobile</label>
                        <input type="text" name="Contact" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email" class="form-control">
                    </div>
                </div>

            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="Address" class="form-control" id="Address">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="City" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Postcode</label>
                    <input type="text" name="PostCode" class="form-control">
                </div>
            </div>

            <div class="form-row">
                    <div class="col">
                        <label for="Gender">Gender</label>
                        <input type="text" name="Gender" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Height">Height in CM</label>
                        <input type="text" name="Height" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Weight">Weight in lbs</label>
                        <input type="text" name="Weight" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="AboutMe">About Me</label>
                    <textarea class="form-control" name="About" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="Goals">Goals</label>
                    <textarea class="form-control" name="Goals" rows="3"></textarea>
                </div>
            
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit">Submit</button>
                        <a href="Login.php" class="btn btn-secondary btn-lg" >Login</a>
            </div>
        </form>
    </div>
    <?php include_once '../includes/JavaScript.php' ?>
</body>

</html>