<?php

    class A{
        public $country="Bangladesg";
        private $city="Rajshahi";
        private $post="6000";

        function __set($property,$value){
            if(property_exists($this,$property)){
                $this->$property=$value;
            }
            else{
                echo "This undefined property $".$property."<br>";
            }
        }

        function __sleep(){ // automatically called when serialize() is execute
            return array("city","post"); // this line confirmed convert only $city, $post and it's value into string
        }
    }

    $obj=new A();
    $var=serialize($obj); // this function is used to convert the property name and it's value of a object into string
    echo $var;

?>