<?php
require_once '../Model/User.php';
require_once '../Model/dbConnection.php';

$edited = false;

if (isset($_REQUEST['edited']))
{
	if($_REQUEST['edited'] == "success")
	{
		$edited = true;
	}
}

if ($_REQUEST['User_ID'])
{
	$getUser = $_REQUEST['User_ID'];
	$Result = getUser($getUser);
}

if(isset($_REQUEST['updatedUser']))
{
	$updatedInfo = new User();
	$updatedInfo->First_Name = $_REQUEST['First_Name'];
	$updatedInfo->Last_Name = $_REQUEST['Last_Name'];
	$updatedInfo->Email = $_REQUEST['Email'];
	$updatedInfo->Address = $_REQUEST['Address'];
	$updatedInfo->City = $_REQUEST['City'];
	$updatedInfo->PostCode = $_REQUEST['PostCode'];
	$updatedInfo->Contact = $_REQUEST['Contact'];
	$updatedInfo->Gender= $_REQUEST['Gender'];
	$updatedInfo->Height= $_REQUEST['Height'];
	$updatedInfo->Weight = $_REQUEST['Weight'];
	$updatedInfo->About = $_REQUEST['About'];
	$updatedInfo->Goals = $_REQUEST['Goals'];

	updateUser($updatedInfo, $_REQUEST['User_ID']);
	header('Location: Profile.php?Profile=updatedSuccessfully');
}