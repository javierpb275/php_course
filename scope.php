<?php 

//global variable. We can access it from any part of the code, 
//EXCEPT FROM FUNCTIONS
$number = 7;

//functions cannot access to the global variables
/*
function showNumber() {
    echo $number;
}
*/
//we have to do:

function showNumber($number) {
    echo $number;
}

showNumber($number);

echo '<br><br>';

//And we cannot access a variable that is inside a function:
/*
function showNumber2() {
    $number2 = 10;
}

showNumber2();

echo $number2;
*/
//we have to do:
function showNumber2() {
    $number2 = 10;
    return $number2;
}

$number2 = showNumber2();

echo $number2;


?>