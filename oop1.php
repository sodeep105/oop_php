<?php
class Human {
    public $name;
    public $age;
    public function __construct($peopleName, $peopleAge = 0) {
        $this->name = $peopleName;
        $this->age = $peopleAge;
        echo "object has been created\n";
    }
    public function sayHi(){
        echo "Good day, sir\n";
        $this->introduce();
    }
    public function introduce(){
        if($this->age){
            echo "Hello my name is {$this->name} and I am {$this->age} years old.\n";
        } else {
            echo "Hello my name is {$this->name} and I am my age is none of your concern.\n";
        }
    }
}

$h1 = new Human("sudip",22);
$h1->sayHi();