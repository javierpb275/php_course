<?php

#String: text
$name = 'Charles';
$name = "Charles";

#Integer: integer numbers
$number = 5;

#Double: decimal numbers
$number2 = 5.5;

#Iboolean: true or false
$true = true;
$false = false;

#Array: list
$week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
'Saturday', 'Sunday');
$week2 = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
'Saturday', 'Sunday'];
$array = ['text', 1, true, 3.89, array('hello', 123)];
$array2 = array('text', 1, true, 3.89, array('hello', 123));
$week[7] = 'whatever';

echo $week[7] . '<br/>';

#Object: 

#Class

#Null: variable with no value asigned;
$null;

echo "Hello $name" . '<br/>';

echo 'The integer number is ' . $number . '<br/>';

echo gettype($name) . '<br/>';

?>