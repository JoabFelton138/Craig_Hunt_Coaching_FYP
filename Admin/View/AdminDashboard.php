<!DOCTYPE html>
<html>
<?php 
    require_once '../Controller/Appointments.php';
 ?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">

    <?php include_once '../../includes/header.php'; 
          include_once '../../includes/JavaScript.php';
          include_once '../includes/AdminSideNav.php'; 
    ?>
   

</head>

<body>
    <div class="wrapper1">
            <h1>Welcome, Admin.</h1>
            <h2>You have <?=$rowCount?> registered Appointments </h2>
    </div>
</body>

</html>