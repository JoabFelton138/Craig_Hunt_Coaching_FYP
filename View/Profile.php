<!DOCTYPE html>
<html>

<?php
require_once '../Controller/User.php';
require_once '../Controller/Appointments.php';
require_once '../Model/User.php';

?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">

    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/sidenav.php';
    ?>


</head>

<body>
    <div class="container portfolio">
        <div class="bio-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image">
                                <img src="./Images/user.jpg" class="rounded-circle" alt="" />
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-md-6">
                    <div class="bio-content">
                        <br>
                        <h3 style="  font-family: 'Bebas Neue', cursive; font-size: 35px; "> About</h3>
                        <div class="about">
                            <?php foreach ($userInfo as $temp) : ?>
                                <div class="cont">
                                    <h6 style="display: inline;">Height: </h6>
                                    <p style="display: inline;"><?= $temp->Height ?>CM</p>
                                </div>
                                <div class="cont">
                                    <h6 style="display: inline;">Weight: </h6>
                                    <p style="display: inline;"><?= $temp->Weight ?>LBS</p>
                                </div>
                                <div class="cont">
                                    <h6 style="display: inline;">Gender: </h6>
                                    <p style="display: inline;"><?= $temp->Gender ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <br>

                        <?php foreach ($userInfo as $temp) : ?>
                            <p style="text-align: left;"><?= $temp->About ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h3 style="  font-family: 'Bebas Neue', cursive; font-size: 35px; ">
                            <?php foreach ($userInfo as $temp) : ?>
                                <?= $temp->First_Name ?> <?= $temp->Last_Name ?>
                            <?php endforeach; ?>
                        </h3>

                        <?php foreach ($userInfo as $temp) : ?>
                            <p><?= $temp->Contact ?></p>
                            <p><?= $temp->Email ?></p>
                            <p><?= $temp->Address ?></p>
                            <p><?= $temp->City ?></p>
                            <p><?= $temp->PostCode ?><p>



                                    <a type="submit" href="./EditProfile.php?User_ID=<?= $temp->User_ID ?>" class="btn btn-primary btn-sm">Edit Information</a>
                                    <a href="ExercisePlan.php" class="btn btn-success btn-sm">View Exercise Plan</a>
                                <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bio-content">
                        <h3 style="  font-family: 'Bebas Neue', cursive; font-size: 35px; "> Goals </h3>
                        <?php foreach ($userInfo as $temp) : ?>
                            <p style="text-align: left;"><?= $temp->Goals ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
</body>


</html>