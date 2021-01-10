<?php

class ClientsExerciseLog
{
    private $Day;
    private $Exercise;
    private $Duration;
    private $Distance_In_Metres;
    private $Weight;
    private $Repetitions;

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }
}