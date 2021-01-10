<!DOCTYPE html>
<html>
<?php
require_once '../Controller/Appointments.php';
require_once '../Model/NewAppointment.php';
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
                            <h1 style="  font-family: 'Bebas Neue', cursive; 
  text-align: center; font-size: 50px; ">Appointments</h1>
                            <br>
                            <th>Reference</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointmentInfo as $temp) : ?>
                            <tr>
                                <td><?= $temp->Booking_ID ?></td>
                                <td><?= $temp->Time ?></td>
                                <td><?= $temp->Date ?></td>
                                <td><?= $temp->Location ?></td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="NewAppointment.php" class="btn btn-primary">Create An Appointment</a>
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