<?php 

//>, <, <=, >=, ==, !=, !
//&&, || (OR)
//XOR - just 1 condition must be true. no more, no less.
$age = 17;
$name = 'pepe';

if($age >= 18 && $name == 'Charles') {
    echo '<h1> Welcome </h1>';
}

if($age < 18 XOR $name != 'Charles') {
    echo '<h1> You are under age </h1>';
}

?>