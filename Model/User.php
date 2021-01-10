<?php
class User {
    private $First_Name;
    private $Last_Name;
    private $Email;
    private $Address;
    private $City;
    private $PostCode;
    private $Contact;
    private $Username;
    private $User_ID;
    private $Password;
    private $Gender;
    private $Height;
    private $Weight;
    private $About;
    private $Goals;

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }
}