<!DOCTYPE html>
<html>
<?php
require_once '../Controller/Appointments.php';
?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">
    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/AdminSideNav.php';
    ?>
</head>
<body>
    <div class="wrapper1">
        <div class="card mt-4">
            <div class="card-body">

            <?php if($deleted == true) { ?>
				<div class="alert alert-success" role="alert">
					Appointment Deleted!
				</div>
            <?php } ?>
            
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <h1 style="  font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">Appointments</h1>
                            <br>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($appointmentInfo as $temp) : ?>
                            <tr>
                                <td><?= $temp->First_Name ?></td>
                                <td><?= $temp->Last_Name ?></td>
                                <td><?= $temp->Time ?></td>
                                <td><?= $temp->Date ?></td>
                                <td><?= $temp->Location ?></td>
                                <td>
									<a href="./EditAppointment.php?bookingID=<?=$temp->Booking_ID?>" class="btn btn-success">Edit</a>
									<a href="../Controller/deleteAppointment.php?bookingID=<?=$temp->Booking_ID?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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