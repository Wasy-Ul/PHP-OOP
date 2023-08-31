<?php

    class test{
         public $country="Bangladesh";
         public $city="Rajshahi";
         private $post="6000";
         private $post1="4300";

         function __sleep(){  // automatically called when serialize() is executed
            return array("country","city","post");
         }

         function __wakeup(){ // automatically called when unserialize() is executed.
            echo "__wakeup() is executed.<br>";
         }
    }

    $obj= new test();

    $str=serialize($obj); // serialize() is used to convert the property name and it's value of a object into string
    echo $str."<br>";

    $obj2= unserialize($str); // unserialize() is used to make a object of $str. Where, $str is a serialization of a object of test class

    echo "<pre>";
    print_r($obj2); // contain all of the property of $obj only property
    echo "</pre>";

?>