<!DOCTYPE html>
<html>

<?php 
require_once '../../Model/dbConnection.php';
require_once '../Controller/Comment.php';
require_once '../Controller/currentExLog.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">

    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/AdminSideNav.php'; 
    ?>


</head>

<body>
    <div class="square2">

        <form method="post">           
        <h1 style="font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Comment</h1>
     
             

                <?php foreach ($currentExerciseLog as $temp): ?>

                <div> <input type="hidden" name="Exercise_Log_ID" value="<?=$temp->Exercise_Log_ID?>"/></div>


                <?php endforeach ;?>

                <div class="form-group">

                <?php foreach ($getLastComment as $temp) : ?>
                    <textarea class="form-control" name="Comment" rows="10" cols="30"> <?= $temp->Comment ?> </textarea>
                <?php endforeach ?>
                </div>


                <div class="col-md-12 text-center">  
                <button type="submit" name="comment" class="btn btn-success btn-lg">Submit</button>
                </div>
          
        </form>
    </div>
    </div>
</body>

</html>