<?php 

class Person {

    public $name;
    public $age;
    public $country;

    public function showInfo() {
        echo $this->name . ' is ' . $this->age . ' and is from ' . $this->country . '<br>';
    }

}

$person1 = new Person;
$person1->name = 'Charles';
$person1->age= 23;
$person1->country = 'UK';

$person1->showInfo();

?>