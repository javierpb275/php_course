<?php 

//PUBLIC
//You can access from any place, whether inside or outside of our class

//PROTECTED
//You can only access from inside of the class or the classes that extend from that class

//PRIVATE
//You can only access from inside of the class where they were created.

//VIDEO 56. MINUTE 5:30.

class User {

    public $name;
    public $email;

    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function showInfo() {
        return $this->email;
    }

}

$user1 = new User('Pepe', 'pepe@gmail.com');

echo $user1->showInfo() . '<br>';


?>