<?php

    class A{
        public static $name="Class A<br>";

        static function show()
        {
            echo static::$name; // static means late static binding. 
        }
    }
    echo A::$name;
    A::show();

    class B extends A{
        public static $name="Class B<br>"; // cann't override because inherited $name accessed by parent::$name

        // inherit the static show() function and static $name property also
        function get()
        {
            echo parent::$name;
        }
    }

    echo B::$name;
    B::show(); // display Class B. because show() contain the late static binding static::$name
    $obj1=new B();
    $obj1->get();
?>