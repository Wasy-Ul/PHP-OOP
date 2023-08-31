<?php

    class A{
        public $country="America";
        private  $city="Washington";

        function __isset($property) //automatically invoke when we try to check isset($obj->private_property)
        {
            return isset($this->$property);
        }
    }

    $obj= new A();
    $var="California";
    echo isset($var)?"Set<br>":"Not set<br>"; // simply work fine
    echo empty($var)?"Empty<br>":"Non empty<br>"; // simply work fine
    echo isset($obj->country)?"Set<br>":"Not set<br>"; // simply work fine
    echo empty($obj->country)?"Empty<br><br><br>":"Non empty<br><br><br>"; // simply work fine

    echo isset($obj->city)?"Set<br><br><br>":"Not set<br><br><br>"; // here automatically invoke __isset() because we are trying to access private property inside a isset() method
     
    echo isset($obj->name)?"Set<br>":"Not set<br>"; // here automatically invoke __isset() because we are trying to access undefined property inside a isset() method
?>