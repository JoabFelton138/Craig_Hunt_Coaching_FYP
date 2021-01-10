<?php

require_once '../Model/dbConnection.php';
require_once '../Model/Comment.php';

if ($_REQUEST['Exercise_Log_ID'])
{
    $ExLogID = $_REQUEST['Exercise_Log_ID'];
    $getLastComment = getLastComment($ExLogID);
}

