<?php

    class A{
        private static $city;

        private static function show($city){
            self::$city=$city;
            echo self::$city."<br>";
        }

        static function __callStatic($method,$city)
        {
            if(method_exists(__class__,$method)){  // since there are no Object for class A. We call static show(). That's why method_exists() need a class name as a parameter. __class__ is constant that hold a class name only inside a class
                call_user_func_array([__class__,$method],$city);
            }
            else{
                echo "$method() is not exist.<br>";
            }
        }
    }

    A::show("London"); // show() is a private static method. So, when we call it automatically invoke __callStattic()  which also a static and magic method.

?>