<!DOCTYPE html>
<html>
<?php
require_once '../Controller/Users.php';

?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidenav.css">
    <?php include_once '../includes/header.php';
    include_once '../includes/JavaScript.php';
    include_once '../includes/AdminSideNav.php';
    ?>
</head>
<body>
    <div class="wrapper1">
        <div class="card mt-4">
            <div class="card-body">
            
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                        <h1 style="  font-family: 'Bebas Neue', cursive; 
  text-align: center; font-size: 50px; ">Clients</h1>
                            <br>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($profileInfo as $temp) : ?>
                            <tr>
                                <td><?= $temp->First_Name ?></td>
                                <td><?= $temp->Last_Name ?></td>
                                <td><?= $temp->Contact ?></td>
                                <td><?= $temp->Email ?></td>
                                <td>
                                    <a href="./ClientProfile.php?User_ID=<?=$temp->User_ID?>" class="btn btn-success">View Profile</a>
                                    <a href="./ExercisePlans.php?User_ID=<?=$temp->User_ID?>" class="btn btn-primary">View Fitness Plan</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
            <br />
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        <?php include_once '../includes/DataTable.php' ?>
    </script>
</body>
</html>