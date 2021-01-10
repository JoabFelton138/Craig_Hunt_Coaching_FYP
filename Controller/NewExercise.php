<?php
    require_once '../Model/dbConnection.php';
    require_once '../Model/NewExLogEntry.php';
    
    if(isset($_REQUEST['addExercise'])):

    $Exercise_Name = htmlspecialchars($_REQUEST['Exercise_Name']);
    $Day = htmlspecialchars($_REQUEST['Day']);
    $Weight = htmlspecialchars($_REQUEST['Weight']);
    $Repetitions = htmlspecialchars($_REQUEST['Repetitions']);
    $Distance = htmlspecialchars($_REQUEST['Distance']);
    $Duration = htmlspecialchars($_REQUEST['Duration']);


        if (empty($Exercise_Name) || empty($Day)):
                
            header('Location: NewExercise.php?Appointment=empty');
            exit();
            
        else:
            
        $newEntry = new NewExLogEntry();
        $newEntry->Exercise_Name = $Exercise_Name;
        $newEntry->Day = $Day;
        $newEntry->Weight = $Weight;
        $newEntry->Repetitions = $Repetitions;
        $newEntry->Distance = $Distance;
        $newEntry->Duration = $Duration;
              
        exLogEntry($newEntry, $_SESSION['uID']);
        header('Location: NewExercise.php?NewExercise=success');
        exit();

        endif;
    endif;
    
    require_once '../View/NewExercise.php';