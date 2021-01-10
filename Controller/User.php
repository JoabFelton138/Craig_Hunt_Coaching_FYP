<?php
require_once '../Model/dbConnection.php';
require_once '../Model/User.php';

$userInfo = getUser($_SESSION['uID']);
