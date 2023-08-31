<?php

    // get_class($obj) method

    class base{
        function className(){
            echo "Class Name Is: ".get_class($this)."<br>";
        }
        static function data(){
            echo get_called_class()."<br>";
        }
    }

    $obj= new base();
    $obj->className();
    echo get_class($obj)."<br>";

    // get_parent_class($obj)

    class derived extends base{
        public $name="Hello";
        private $name1="Hello World";

        private function show(){}
        function show1(){}
        function show2(){}
        function getMethods(){
            return get_class_methods($this);
        }
        function getVars(){
            return get_class_vars(__class__);
        }
        function getVars1(){
            return get_object_vars($this);
        }
    }

    $obj2= new derived();
    echo "Parent class of derived is: ".get_parent_class($obj2)."<br>";
    echo "Parent class of derived is: ".get_parent_class("derived")."<br>";

    // get_class_methods($obj)
    $methods= get_class_methods("derived");
    echo "Class Methods: <br>";
    print_r($methods); echo "<br>";
    print_r($obj2->getMethods());

    // get_class_vars() , get_object_vars()
    echo "Class Vras: <br>";
    print_r(get_class_vars("derived"));echo "<br>";
    print_r($obj2->getVars()); echo "<br>";
    print_r(get_object_vars($obj2));echo "<br>";
    print_r($obj2->getVars());echo "<br>";

    // get_called_class()

    base::data();
    derived::data();
?>