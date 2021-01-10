<?php

require_once '../../Model/dbConnection.php';
require_once '../../Model/ClientsExerciseLog.php';

if ($_REQUEST['Exercise_Log_ID'])
{
    $getCurrentExerciseLog = $_REQUEST['Exercise_Log_ID'];
    $currentExerciseLog = getCurrentExerciseLog($getCurrentExerciseLog);
}