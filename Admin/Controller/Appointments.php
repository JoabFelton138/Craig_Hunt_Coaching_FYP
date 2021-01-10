<?php
require_once '../../Model/dbConnection.php';
require_once '../../Model/NewAppointment.php';

$appointmentInfo = getAllAppointments();
$rowCount = countAllAppointments();

$deleted = false;

if (isset($_REQUEST['deleted'])) {
	if($_REQUEST['deleted'] == "success") {
		$deleted = true;
	}
}