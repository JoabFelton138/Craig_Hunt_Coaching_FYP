<?php
class Admin {

    private $User_Name;
    private $Password;

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }
}