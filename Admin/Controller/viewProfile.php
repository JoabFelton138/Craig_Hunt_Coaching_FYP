<?php
require_once '../../Model/User.php';
require_once '../../Model/dbConnection.php';

if ($_REQUEST['User_ID'])
{
	$currentUser = $_REQUEST['User_ID'];
	$Result = getUser($currentUser);
}