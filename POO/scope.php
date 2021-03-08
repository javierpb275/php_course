<?php 

//PUBLIC
//You can access from any place, whether inside or outside of our class

//PROTECTED
//You can only access from inside of the class or the classes that extend from that class

//PRIVATE
//You can only access from inside of the class where they were created.


class User {

    private $name;
    protected $email;

    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function showInfo() {
        return $this->name;
    }

}

class Member extends User {

    public function showEmail() {
        return $this->email;
    }

}

$member1 = new Member('Pepe', 'pepe@gmail.com');

$user1 = new User('Charles', 'charles@gmail.com');

echo $member1->showEmail() . '<br>';

echo $user1->showInfo(). '<br>';




?>