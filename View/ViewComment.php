<!DOCTYPE html>
<html>

<?php
require_once '../Controller/viewComment.php';
require_once '../Model/Comment.php';;

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


<div class="square2">
        <h1 style="font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Comment</h1>
                <?php foreach ($getLastComment as $temp): ?>
                <div class="form-group">
                    <textarea class="form-control" name="Comment" rows="10" cols="30"> <?=$temp->Comment ?> </textarea>
                </div>
                <?php endforeach ;?>
                
                <?php

?>
                <div class="col-md-12 text-center">
                    <a href="ExerciseLog.php" class="btn btn-primary btn-lg">Back to Exercise Log</a>
                </div>
    </div>
</div>


</body>


</html>