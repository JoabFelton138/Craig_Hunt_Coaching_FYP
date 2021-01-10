<!DOCTYPE html>

<?php
require_once '../Model/dbConnection.php';
require_once '../Controller/NewAppointment.php';
?>

<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
	<link rel="stylesheet" type="text/css" href="CSS/sidenav.css">

	<?php
	include_once '../includes/header.php';
	include_once '../includes/sidenav.php';
	?>
</head>

<body>
	<div class="wrapper1">
		<div class="card mt-4">
			<div class="card-body">
				<h1 style="  font-family: 'Bebas Neue', cursive; text-align: center; font-size: 50px; ">New Appointment</h1>
				<br>
				<form method="post">
					<div class="form-row">
						<div class="md-form col-md-6">
							<input type="Time" min="06:00" max="21:00" id="Time" name="Time" class="form-control" id="Time">
						</div>
						<div class="md-form col-md-6">
							<input type="Date" name="Date" id="date" class="form-control" id="Date">
						</div>
					</div>

					<select class="form-control" name="Location" id="Location" class="form-control" id="Location">
						<option>Location</option>
						<option>Foundry Gym, Cooper St, Wolverhampton WV2 2JL</option>
						<option>Xercise4Less, The Grasshopper Building, Craddock St, Wolverhampton WV6 0QZ</option>
						<option>Popeyes Gym, Unit 8, arrow industrial estate, Straight Rd, Willenhall WV12 5AE</option>
						<option>JD Gyms, Stafford St, Wolverhampton WV1 1NT</option>
						<option>The Gym, Alexandra St, Wolverhampton WV3 0TE</option>
					</select>
			</div>
			<div class="row">

				<div class="col-md-12 text-center">
					<button type="submit" class="btn btn-primary" id="create" name="create">Create Appointment</button>
				</div>

			</div>
			<br />
			</form>
		</div>
	</div>
	<?php include_once '../includes/JavaScript.php' ?>
</body>

</html>