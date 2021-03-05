<?php 

class Person {

    public $name;
    public $age;
    public $country;

    public function showInfo() {
        echo 'Hello World <br>';
    }

}

$person1 = new Person;
$person1->name = 'Charles';
$person1->age= 23;
$person1->country = 'UK';

$person1->showInfo();

$person2 = new Person;
$person2->name = 'Pepe';
$person2->age= 40;
$person2->country = 'Spain';

echo $person2->name . ' is ' . $person2->age . '. <br>';

?>