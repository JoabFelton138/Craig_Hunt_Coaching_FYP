<!DOCTYPE html>

<?php
require_once '../Model/dbConnection.php';
require_once '../Controller/NewExercise.php';
?>

<html>

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
    <div class="wrapper1">
        <div class="card mt-4">
            <div class="card-body">
                <h1 style="  font-family: 'Bebas Neue', cursive;  text-align: center; font-size: 50px; ">New Exercise</h1>
                <br>
                <form method="post">
                  
                <div class="form-group row">
                            <div class="col-4">
                                <label for="Day" style="font-size: 18px">Day</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Day" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Exercise" style="font-size: 18px">Exercise</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Exercise_Name" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Duration" style="font-size: 18px">Duration</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Duration" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Distance" style="font-size: 18px">Distance</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Distance" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Weight" style="font-size: 18px">Weight</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Weight" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Repetitions" style="font-size: 18px">Repetitions</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Repetitions" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3 offset-4">
                           
                            <a href="./ExerciseLog.php" class="btn btn-primary form-control"> Back to Exercise Log</a>
                            
                            </div>
                            <div class="col-3">
                            <button type="submit" class="btn btn-success form-control" name="addExercise">Add Exercise</button>
                            </div>
            </div>

            </div>
            <br />
            </form>
        </div>
    </div>
</body>

</html>