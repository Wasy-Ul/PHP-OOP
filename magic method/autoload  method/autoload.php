<?php
    
    //  require "One.php";
    //  require "Two.php";
     function myAutoloader($class){
        require "$class.php";
     }

     spl_autoload_register("myAutoloader");

     $obj= new One();
     $obj= new Two();

?>