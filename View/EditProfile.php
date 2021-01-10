<!DOCTYPE html>
<html>

<?php
require_once '../Controller/User.php';
require_once '../Controller/editProfile.php';
require_once '../Model/User.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">

    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/sidenav.php';
    ?>


</head>

<body>
    <div class="square1">

        <form method="post">           
        <h1 style="font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Edit Profile</h1>
            <?php foreach ($Result as $temp) : ?>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" value="<?= $temp->First_Name ?>" name="First_Name" class="form-control">
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Last Name</label>
                        <input type="text" value="<?= $temp->Last_Name ?>" name="Last_Name" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="Contact">Mobile</label>
                        <input type="text" value="<?= $temp->Contact?>" name="Contact" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Email">Email</label>
                        <input type="Email" value="<?= $temp->Email ?>" name="Email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="Address" value="<?= $temp->Address?>" class="form-control" id="Address">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" value="<?= $temp->City?>" name="City" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Postcode</label>
                        <input type="text" name="PostCode" value="<?= $temp->PostCode?>" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="Gender">Gender</label>
                        <input type="text" name="Gender" value="<?= $temp->Gender ?>" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Height">Height</label>
                        <input type="text" name="Height" value="<?= $temp->Height?>" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Weight">Weight</label>
                        <input type="text" name="Weight" value="<?= $temp->Weight ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="AboutMe">About Me</label>
                    <textarea class="form-control"  class="form-control" name="About" rows="3"><?= $temp->About ?></textarea>
                </div>
                <div class="form-group">
                    <label for="Goals">Goals</label>
                    <textarea class="form-control" name="Goals" rows="3"><?= $temp->Goals?></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <a href="Profile.php" class="btn btn-primary btn-lg">Profile</a>
                    <button type="submit" name="updatedUser" class="btn btn-success btn-lg">Submit</button>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
    </div>
</body>

</html>