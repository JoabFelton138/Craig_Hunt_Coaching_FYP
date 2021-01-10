<!DOCTYPE html>
<html>

<?php require_once '../Controller/Exercises.php'; ?>
<?php require_once '../Controller/deleteExercise.php'; ?>
<?php require_once '../Controller/Users.php'; ?>

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

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <h1 style="  font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Exercise Plan</h1>
                            <br>
                            <th>Day</th>
                            <th>Exercise</th>
                            <th>Duration</th>
                            <th>Repetitions</th>
                            <th>Distance</th>
                            <th>Weight</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($Result as $temp) : ?>
                        <tr>
                            <td><?= $temp->Day ?></td>
                            <td><?= $temp->Exercise ?></td>
                            <td><?= $temp->Duration ?></td>
                            <td><?= $temp->Repetitions ?></td>
                            <td><?= $temp->Distance_In_Metres?></td>
                            <td><?= $temp->Weight ?></td>
                            <td>
                                <a href="./EditExercise.php?Exercise_ID=<?=$temp->Exercise_ID?>" class="btn btn-success">Edit</a>
                                <a href="../Controller/deleteExercise.php?Exercise_ID=<?=$temp->Exercise_ID?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                <?php foreach ($User as $temp) : ?>
                <a href="./Clients.php?User_ID=<?=$temp->User_ID?>" class="btn btn-primary">Back to Users</a>
                <a href="./NewExercise.php?User_ID=<?=$temp->User_ID?>" class="btn btn-success">Add Exercise</a>
                <?php endforeach; ?>
                </div>
            </div>
            <br />
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        <?php include_once '../includes/DataTable.php' ?>
    </script>
</body> 

</html>