<?php 

class PersonStatic {

    public static $day = 'September 7th';

    public static function sayHello($name = null) {

        if($name) {
            return 'Hello ' . $name;
        } else {
            return 'Hello';
        }

    }

}


$pepe = new PersonStatic;

echo PersonStatic::$day;

echo '<br><br>';

echo PersonStatic::sayHello();

echo '<br><br>';

echo $pepe->sayHello('Pepe');