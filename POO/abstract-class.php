<?php 

abstract class PersonA {

    public function sayHello() {
        return 'Hello!';
    }

}

 class StudentA extends PersonA {

}

$student1 = new StudentA;

echo $student1->sayHello();