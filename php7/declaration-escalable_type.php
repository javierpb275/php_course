<?php 

//declare(strict_types=1);//we are being strict

//if I say I want an int you can only pass an int and not a string
function square(int $number) {
    return $number * $number;
}

//if we pass a text that is a number it will work anyway
$number = '8';

echo 'The square of ' . $number . ' is ' . square($number);