<?php

require_once '../../Model/dbConnection.php';
require_once '../../Model/ClientsExerciseLog.php';

if ($_REQUEST['User_ID'])
{
    $getClientsExerciseLog = $_REQUEST['User_ID'];
    $usersExerciseLog = ClientsExerciseLog($getClientsExerciseLog);
}
