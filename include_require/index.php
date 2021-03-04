<?php 

function sum($number1, $number2) {
    return $number1 + $number2;
}

//include: includes a file inside this file
//include 'view.php';
//require: includes a file inside this file
require 'view.php';

//the difference is that if there's an error 
//like it is not able to find the file
//include: it loads the rest of the page/code anyway and it gives us 
//a warning
//require: the page fails and it doesn't show anything and it gives us
//a fatal error.

//include_once and require_once: we call only once the line of code.
include_once 'view.php';
include_once 'view.php';
?>