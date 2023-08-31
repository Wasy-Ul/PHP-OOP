 <?php

    class A{
        protected $name;

        function __construct($name,$age)
        {
            $this->name=$name;$this->age=$age;
        }

        function show()
        {
            echo $this->name." &nbsp;".$this->age."<br>";
        }
    }

    class B extends A{
        function get()
        {
            echo $this->name." &nbsp;".$this->age."<br>";
        }
    }

    $obj1=new A("Niton",49);
    //echo $obj1->name;
    echo $obj1->age."<br>";
    $obj1->show();    

    $obj2=new B("Niton 2", 33);
    //echo $obj2->name;
    echo $obj2->age."<br>";
    $obj2->show();    
    $obj2->get();    

?>