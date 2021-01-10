<?php
require_once '../../Model/dbConnection.php';
require_once '../../Model/Admin.php';

if (isset($_SESSION['aID']))
{

	header('Location: AdminDashboard.php');
	exit();
} 

elseif (isset($_REQUEST['log']))
 {
	$Username = htmlspecialchars($_REQUEST['Username']);
	$Password = htmlspecialchars($_REQUEST['Password']);

	$clientUsers = adminLogin($Username);

	if (sizeof($clientUsers) < 1) 
	{
		header('Location: Login.php?Login=userdoesntexist');
		exit();
	} 
	
	else 
	{	
			$_SESSION['aID'] = $clientUsers[0]->Admin_ID;
			$_SESSION['uUsername'] = $clientUsers[0]->Username;

			header("Location: AdminDashboard.php");
			exit();
	}
}


require_once '../View/Login.php';
