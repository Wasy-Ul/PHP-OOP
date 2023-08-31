 <?php

    class A{
        public $name;

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

    $obj1= new A("Niton",49);
    $obj1->show();
    echo $obj1->name." &nbsp;".$obj1->age."<br>";

    $obj2=new B("Niton2",33);
    $obj2->show();
    echo $obj2->name." &nbsp;".$obj2->age."<br>";
    $obj2->get();

 ?>