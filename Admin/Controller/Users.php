<?php
require_once '../../Model/dbConnection.php';
require_once '../../Model/User.php';

$profileInfo = getAllUsers();


if (isset($_REQUEST['User_ID']))
{
	$getUser = $_REQUEST['User_ID'];
	$User = getUser($getUser);
}


