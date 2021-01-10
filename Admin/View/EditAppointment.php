<!DOCTYPE html>
<html>
<?php
require_once '../Controller/editAppointments.php';
require_once '../../Model/NewAppointment.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
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
                <h1>Edit Appointment</h1>
                <br>
                <?php foreach ($Result as $temp): ?>

                <form method="post">
                    <div class="form-group row">
                        <div class="col-4">
                            <label for="Time">Time</label>
                        </div>
                        <div class="col-6">
                            <input type="Time" name="Time" value="<?= $temp->Time ?>" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label for="Date">Date</label>
                        </div>
                        <div class="col-6">
                            <input type="Date" name="Date" value="<?= $temp->Date?>" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label for="Location">Location</label>
                        </div>
                        
                        <div class="col-6">
                            <select class="form-control" name="Location" type="text" value="<?= $temp->Location ?>" name="Location" class="form-control" id="Location">
						<option>Location</option>
						<option>Foundry Gym, Cooper St, Wolverhampton WV2 2JL</option>
						<option>Xercise4Less, The Grasshopper Building, Craddock St, Wolverhampton WV6 0QZ</option>
						<option>Popeyes Gym, Unit 8, arrow industrial estate, Straight Rd, Willenhall WV12 5AE</option>
						<option>JD Gyms, Stafford St, Wolverhampton WV1 1NT</option>
						<option>The Gym, Alexandra St, Wolverhampton WV3 0TE</option>
					</select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3 offset-4">
                            <a href="Appointments.php" class="btn btn-primary form-control">Appointments</a>
                        </div>
                        <div class="col-3">
                            <button type="submit" name="updatedAppointment" class="btn btn-success form-control">Submit</button>
                        </div>
                    </div>
                </form>

                <?php endforeach; ?>
            </div>
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