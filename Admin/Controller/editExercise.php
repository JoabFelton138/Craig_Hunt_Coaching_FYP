<?php
require_once '../../Model/Exercise.php';
require_once '../../Model/dbConnection.php';

if ($_REQUEST['Exercise_ID'])
{
	$currentExercise = $_REQUEST['Exercise_ID'];
	$Result = getCurrentExercise($currentExercise);
}

if(isset($_REQUEST['updatedExercise']))
{
	$editedEntry = new Exercise();
	$editedEntry->Day = $_REQUEST['Day'];
	$editedEntry->Exercise = $_REQUEST['Exercise'];
    $editedEntry->Duration = $_REQUEST['Duration'];
    $editedEntry->Distance_In_Metres = $_REQUEST['Distance_In_Metres'];
    $editedEntry->Weight = $_REQUEST['Weight'];
    $editedEntry->Repetitions = $_REQUEST['Repetitions'];

    editPlanEntry($editedEntry,  $_REQUEST['Exercise_ID']);
    header('Location: ../View/Clients.php?ExerciseUpdated=success');
    
   
}