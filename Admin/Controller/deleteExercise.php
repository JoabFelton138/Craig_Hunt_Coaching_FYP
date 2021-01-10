<?php
require_once '../../Model/dbConnection.php';

if (isset($_REQUEST['Exercise_ID']))
{
	$Exercise_ID = $_REQUEST['Exercise_ID'];
	$Result = deleteExercise($Exercise_ID);
	header('Location: ../View/Clients.php?deleted=success');
}
