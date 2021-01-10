<?php

class Comment 
{
    private $Comment_ID;
    private $Admin_ID;
    private $Exercise_Log_ID;
    private $Comment;
    
    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }
}