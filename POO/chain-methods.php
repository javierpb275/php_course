<?php

class UserCm {

    public $name;
    public $email;

    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function showName() {
        echo 'My name is: ' . $this->name . '<br>';
        return $this;
    }

    public function showEmail() {
        echo 'My email is: ' . $this->email . '<br>';
        return $this;
    }

}

$user1 = new UserCm('Pepe', 'pepe@gmail.com');

$user1->showName()->showEmail();