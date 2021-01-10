<?php
require_once '../../Model/dbConnection.php';
require_once '../../Model/Exercise.php';

if (isset($_REQUEST['create'])) :
    
    $User_ID = $_REQUEST['UserID'];

    $Day = htmlspecialchars($_REQUEST['Day']);
    $Exercise = htmlspecialchars($_REQUEST['Exercise']);
    $Repetitions = htmlspecialchars($_REQUEST['Repetitions']);
    $Duration = htmlspecialchars($_REQUEST['Duration']);
    $Distance_In_Metres = htmlspecialchars($_REQUEST['Distance']);
    $Weight = htmlspecialchars($_REQUEST['Weight']);


    $newEntry = new Exercise();
    $newEntry->Day = $Day;
    $newEntry->Exercise = $Exercise;
    $newEntry->Repetitions = $Repetitions;
    $newEntry->Distance_In_Metres = $Distance_In_Metres;
    $newEntry->Duration = $Duration;
    $newEntry->Weight = $Weight;

    createPlan($newEntry,  $User_ID);
    header('Location: ../View/Clients.php?ExerciseAdded=success');


    exit();

endif;

require_once '../View/NewExercise.php';
