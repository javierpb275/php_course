<?php 

class PersonI {

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


class Student extends PersonI {

    function __construct($name, $age, $country, $studies) {
        parent::__construct($name, $age, $country);
        $this->studies = $studies;
    }

}

$student1 = new Student('Charles', 23, 'UK', 'AWD');

$student1->showInfo();

echo $student1->studies;

echo '<br><br>';


class Worker extends PersonI {

    function __construct($name, $age, $country, $job) {
        parent::__construct($name, $age, $country);
        $this->job = $job;
    }

}

$worker1 = new Worker('Pepe', 40, 'Spain', 'Developer');

$worker1->showInfo();

echo $worker1->job;

echo '<br><br>';


?>