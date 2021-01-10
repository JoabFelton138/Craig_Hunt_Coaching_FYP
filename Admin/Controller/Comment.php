<?php

require_once '../../Model/dbConnection.php';
require_once '../../Model/Comment.php';


if ($_REQUEST['Exercise_Log_ID'])
{
    $ExLogID = $_REQUEST['Exercise_Log_ID'];
    $getLastComment = getLastComment($ExLogID);
}

if (isset($_REQUEST['comment'])):

    $Exercise_Log_ID = $_REQUEST['Exercise_Log_ID'];
    $Comment = htmlspecialchars($_REQUEST['Comment']);
    
    $newComment = new Comment();
    $newComment->Admin_ID = $_SESSION['aID'];
    $newComment->Comment = $Comment;

    Comment($newComment, $Exercise_Log_ID);
    header('Location: ../View/ClientLogs.php?CommentAdded=Success');

    exit();
endif;   

require_once '../View/Comment.php';