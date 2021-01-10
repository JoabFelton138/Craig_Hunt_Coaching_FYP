<!DOCTYPE html>
<html>

<?php 
    require_once '../Controller/User.php';
    require_once '../Controller/Appointments.php';
    require_once '../Model/User.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">

    <?php include_once '../includes/header.php'; 
          include_once '../includes/JavaScript.php';
          include_once '../includes/sidenav.php'; 
    ?>
   

</head>

<body>
    <div class="wrapper1">
            <?php foreach($userInfo as $temp):?>
            <h1>Welcome, <?= $temp->First_Name?>.</h1>
            <?php endforeach ?>

            <h2> You have <?=$rowCount?> upcoming appointments.</h2>
          
    </div>
</body>

</html>