<?php

    class NewExLogEntry
    {
        private $Exercise_Log_ID;
        private $User_ID;
        private $Exercise_Name;
        private $Day;
        private $Weight;
        private $Repetitions;
        private $Distance;
        private $Duration;

        function __get($name)
        {
            return $this->$name;
        }

        function __set($name, $value)
        {
            $this->$name = $value;
        }
    }
?>