<?php

namespace one{
    class A{
        function __construct()
        {
            //echo "Class A from namespace one<br>";

            $obj1=new \two\A();
        }
    }

    function show()
    {
        echo "This is a namespace one<br>";
    }
 }

 namespace two{
    class A{
        function __construct()
        {
            echo "Class A from namespace two<br>";
        }
    }

    function show(){
        echo "This is a namespace two<br>";
    }
 }


?>