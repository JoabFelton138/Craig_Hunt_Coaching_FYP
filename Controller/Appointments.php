<?php
require_once '../Model/dbConnection.php';
require_once '../Model/NewAppointment.php';

$appointmentInfo = getAppointment($_SESSION['uID']);
$rowCount = countAppointments($_SESSION['uID']);