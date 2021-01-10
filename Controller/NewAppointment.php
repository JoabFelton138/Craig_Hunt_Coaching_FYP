<?php
    require_once '../Model/dbConnection.php';
    require_once '../Model/NewAppointment.php';
    
    if(isset($_REQUEST['create'])):

    $Time = htmlspecialchars($_REQUEST['Time']);
    $Date = htmlspecialchars($_REQUEST['Date']);
    $Location = htmlspecialchars($_REQUEST['Location']);

        if (empty($Time) || empty($Date) || empty($Location)):
                
            header('Location: NewAppointment.php?Appointment=empty');
            exit();
            
        else:
            
        $newAppointment = new NewAppointment();
        $newAppointment->Time = $Time;
        $newAppointment->Date = $Date;
        $newAppointment->Location = $Location;
              
        newAppointment($newAppointment, $_SESSION['uID']);
        header('Location: NewAppointment.php?NewAppointment=success');
        exit();

        endif;
    endif;
    
    require_once '../View/NewAppointment.php';