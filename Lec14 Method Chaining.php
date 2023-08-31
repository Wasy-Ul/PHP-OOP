<?php

    class A{
        function One(){
            echo"This is class One.<br>";
            return $this;
        }
        function Two(){
            echo"This is class Two<br>";
            return $this;
        }
        function Three(){
            echo"This is class Three.<br>";
            return $this;
        }
    }

    $obj=new A();
    $obj->One();
    $obj->Two();
    $obj->Three();
    echo "<br><br><br>";
    $obj->One()->Two()->Three();

    $obj->One()->Two()->Three();
    $obj->Two()->Three(); // When One() return $this that means return $obj
    $obj->Three(); // When Two() return $this that means return $obj
?>