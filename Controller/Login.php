<?php
require_once '../Model/dbConnection.php';
require_once '../Model/User.php';

if (isset($_SESSION['uID'])){

	header('Location: Dashboard.php');
	exit();
} 

elseif (isset($_REQUEST['log'])){
	$Username = htmlspecialchars($_REQUEST['Username']);
	$Password = htmlspecialchars($_REQUEST['Password']);

	$clientUsers = userLogin($Username);

	if (sizeof($clientUsers) < 1) {
		header('Location: Login.php?Login=userdoesntexist');
		exit();
	} 
		
		
		else {
		
			$_SESSION['uFirst_Name'] = $clientUsers[0]->First_Name;
			$_SESSION['uLast_Name'] = $clientUsers[0]->Last_Name;
			$_SESSION['uID'] = $clientUsers[0]->User_ID;
			$_SESSION['uUsername'] = $clientUsers[0]->Username;
			$_SESSION['uEmail'] = $clientUsers[0]->Email;

			header("Location: Dashboard.php");
			exit();
		}
	}
require_once '../View/Login.php';
