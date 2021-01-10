<?php
require_once '../../Model/dbConnection.php';

if (isset($_REQUEST['bookingID']))
{
	$Booking_ID = $_REQUEST['bookingID'];
	$Result = deleteAppointment($Booking_ID);
	header('Location: ../View/Appointments.php?deleted=success');
}