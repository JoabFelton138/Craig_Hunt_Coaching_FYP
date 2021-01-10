<!DOCTYPE html>
<html>

<?php
require_once '../Controller/ExerciseLog.php';
require_once '../Model/NewExLogEntry.php';
?>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
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
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <h1 style="font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Exercise Log</h1>
                            <br>
                            <th>Exercise</th>
                            <th>Day</th>
                            <th>Duration</th>
                            <th>Repetitions</th>
                            <th>Distance</th>
                            <th>Weight</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($ExLog as $temp) :?>
                            <tr>
                                <td><?= $temp->Exercise_Name?></td>
                                <td><?= $temp->Day?></td>
                                <td><?= $temp->Duration?></td>
                                <td><?= $temp->Repetitions?></td>
                                <td><?= $temp->Distance?></td>
                                <td><?= $temp->Weight?></td>
                                <td> <a href="ViewComment.php?Exercise_Log_ID=<?=$temp->Exercise_Log_ID?>"" class="btn btn-primary">View Comment</a></td> 
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="NewExercise.php" class="btn btn-success">Add an Exercise</a>
                </div>
            </div>
            <br />
            </form>
        </div>
    </div>


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        <?php include_once '../includes/DataTable.php' ?>
    </script>
</body>

</html>