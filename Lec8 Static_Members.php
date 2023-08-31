<?php

    class A{
        public static $name="Hello World<br>";  // static property

        static function show() // static function
        {
            echo "This is class A<br>";
        }
    }

    echo A::$name; // you can access the static property/method without create a object of this class
    echo A::show();

    class B{
        public static $name="Hello World<br>";  // static property

        static function show() // static function
        {
             echo self::$name; // you can't use $this here because $this point a object.
        }
    }
    echo B::$name;
    echo B::show();

    $obj1= new B();
    //echo $obj1->name; you can't access the static property by object
    $obj1->show();  // but you can access the static methos by object

    class C extends B{
        function __construct()
        {
            parent::show();
        }
    }
    echo "<br>";
    $obj2= new C();

?>