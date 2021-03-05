<?php 

class PersonC {

    public $name;
    public $age;
    public $country;

    function __construct($name, $age, $country) {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function showInfo() {
        echo $this->name . ' is ' . $this->age . ' and is from ' . $this->country . '<br>';
    }

}

$person1 = new PersonC('Charles', 23, 'UK');

$person1->showInfo();

$person2 = new PersonC('Pepe', 40, 'Spain');

$person2->showInfo();


?>