<?php
require_once '../../Model/NewAppointment.php';
require_once '../../Model/dbConnection.php';

if ($_REQUEST['bookingID'])
{
	$currentAppointment = $_REQUEST['bookingID'];
	$Result = getCurrentAppointment($currentAppointment);
}

if(isset($_REQUEST['updatedAppointment']))
{
	$updatedAppointment = new NewAppointment();
	$updatedAppointment->Time = $_REQUEST['Time'];
	$updatedAppointment->Date = $_REQUEST['Date'];
	$updatedAppointment->Location = $_REQUEST['Location'];

	updateAppointment($updatedAppointment,  $_REQUEST['bookingID']);
	header('Location: ../View/Appointments.php?AppointmentEdited=success');
}