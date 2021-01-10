<?php
require_once '../Model/dbConnection.php';
require_once '../Model/Exercise.php';

$planInfo = getUsersExercisePlan($_SESSION['uID']);