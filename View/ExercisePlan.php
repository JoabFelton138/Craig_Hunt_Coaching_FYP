<!DOCTYPE html>
<html>
<?php
require_once '../Controller/Exercises.php';
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
                            <h1 style="  font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Exercise Plan</h1>
                            <br>
                            <th>Day</th>
                            <th>Exercise</th>
                            <th>Duration</th>
                            <th>Repetitions</th>
                            <th>Distance</th>
                            <th>Weight</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($planInfo as $temp) : ?>
                            <tr>
                                <td><?= $temp->Day ?></td>
                                <td><?= $temp->Exercise?></td>
                                <td><?= $temp->Duration?></td>
                                <td><?= $temp->Repetitions?></td>
                                <td><?= $temp->Distance_In_Metres?></td>
                                <td><?= $temp->Weight?></td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
            </form>
        </div>
    </div>


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        <?php include_once '../includes/DataTable.php' ?>
    </script>
</body>

</html>