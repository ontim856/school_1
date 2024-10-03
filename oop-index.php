<?php 
include_once('src\lib.php');

class Student {
    public $name = null;
   private $age = 0;
    protected $phone = null;

    function talk(){
        echo "Assalamualaikum";
    }
}

//dd(Student);

$student1 = new Student();
$student1->name = "Akash";


// echo $student1->name;
// echo $student1->talk();




//dd($student1);