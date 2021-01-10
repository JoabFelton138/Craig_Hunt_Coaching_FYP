<!DOCTYPE html>

<?php
require_once '../../Model/Exercise.php';
require_once '../Controller/editExercise.php';

?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">

    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/AdminSideNav.php'; 
    ?>


</head>

<body>
    <div class="wrapper1">
        <div class="card mt-4">
            <div class="card-body">
                <h1 style="  font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Edit Exercise</h1>
                <br>
                <form method="post">
                        

                <div class="form-group row">
                    <?php foreach ($Result as $temp) : ?>
                            <div class="col-4">
                                <label for="Day" style="font-size: 18px">Day</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Day"  value="<?= $temp->Day ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Exercise" style="font-size: 18px">Exercise</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Exercise" value="<?=$temp->Exercise?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Duration" style="font-size: 18px">Duration</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Duration" value="<?= $temp->Duration?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Distance" style="font-size: 18px">Distance</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Distance_In_Metres" value="<?= $temp->Distance_In_Metres?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Weight" style="font-size: 18px">Weight</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Weight" value="<?= $temp->Weight?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label for="Repetitions" style="font-size: 18px">Repetitions</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="Repetitions" value="<?= $temp->Repetitions?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3 offset-4">
                           
                            <a href="./ExercisePlans.php?User_ID=<?=$temp->User_ID?>"class="btn btn-primary form-control"> Back to List</a>
                            
                            </div>
                            <div class="col-3">
                            <button type="submit" class="btn btn-success form-control" name="updatedExercise">Update Exercise</button>
                            </div>
                        </div>

                        <?php endforeach ;?>

                    </form>
            </div>
            <br />
            </form>
        </div>
    </div>
</body>

</html>