<?php
require_once '../Model/dbConnection.php';
require_once '../Model/NewExLogEntry.php';

$ExLog = userGetexLog($_SESSION['uID']);

?>