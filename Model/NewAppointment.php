<?php

    class NewAppointment
    {
        private $Booking_ID;
        private $User_ID;
        private $Admin_ID;
        private $Booking_Type_ID;
        private $Date;
        private $Time;
        private $Location;
        private $FirstName;
        private $LastName;

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