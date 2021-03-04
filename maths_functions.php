<?php 

$number = 15.50;


//round(): it rounds a number
//if the decimal number is <=50 it just removes the decimal numbers
//if the decimal number is >50 it removes the decimal numbers and
// it sums +1 that number.
echo round($number);
echo '<br><br>';
echo round($number, 1);//show 1 decimal number

echo '<br><br>';

//-----------------------------------------

//rand(): returns a random number between the 2 numbers that we pass 
//as parameters

echo rand(5, 10);

echo '<br><br>';

//-------------------------------------------

//ceil(): rounds a number to top 

echo ceil(12.1);

echo '<br><br>';

//------------------------------------------

//PHP includes predefined CONSTANTS:

echo M_PI;

?>