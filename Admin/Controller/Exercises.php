<?php
require_once '../../Model/dbConnection.php';
require_once '../../Model/Exercise.php';

if ($_REQUEST['User_ID'])
{
	$usersPlan = $_REQUEST['User_ID'];
	$Result = getUsersExercisePlan($usersPlan);
}
