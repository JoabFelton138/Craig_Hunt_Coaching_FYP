<?php

require_once '../../Model/dbConnection.php';

session_destroy();
header('Location: ../View/Login.php');
exit();