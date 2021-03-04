<?php 
/*
count();
sort();
rsort();
var_dump();
print_r();
*/

function sayHello() {
    echo "Hello";
}

sayHello();

echo "<br>";
#----------------------------------------------

function sum($number1, $number2) {
    $result = $number1 + $number2;
    echo $result;
}

sum(1, 2);

echo "<br>";
#----------------------------------------------

function sayHelloToSb($name) {
    return 'Hello, ' . $name;
}

echo sayHelloToSb('Pepe');

echo "<br>";
#----------------------------------------------

function calculate_triangle_area($base, $higth) {
    $result = ($base * $higth) / 2;
    return $result;
}

$triangle_area = calculate_triangle_area(10, 10);

echo 'Triangle area: ' . $triangle_area . 'm2';

echo "<br>";
#----------------------------------------------

$text = '< > & "" ';

//turn chars into HTML so they do not execute
echo htmlspecialchars($text);

echo "<br>";

$text2 = '   Hello    ';
//remove white spaces
echo trim($text2);

echo "<br>";

//calculate the size of a string
echo strlen($text2);

echo "<br>";

$text3 = 'Superfragilisticoespialidoso';
//return a piece of a string
$text4 = substr($text3, 1, 2);

echo $text4;

echo "<br>";

//turn uppercase
echo strtoupper($text3);

echo "<br>";

//turn lowercase
echo strtolower($text3);

echo "<br>";

//returns the position of a letter in a string
$pos =  strpos($text3, 'l');

echo $pos;

?>