<?php 

//extract(): extract elements from an associated array as variables
$friend = array(
    'phone' => 21352435345, 
    'age' => 25, 
    'country' => 'USA'
);

extract($friend);

echo $phone;

echo '<br><br>';
//-----------------------------------------------

//array_pop(): extract the last element from the array

$week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 
                'Friday', 'Saturday', 'Sunday');

$sunday = array_pop($week);

foreach ($week as $day_of_week) {
    echo $day_of_week . '<br />';
}

echo '<br><br>';

echo $sunday;

echo '<br><br>';
//-----------------------------------------------------

//join(): show each element separated with '<br>'

echo join('<br>', $week);

echo '<br><br>';
//------------------------------------------------

//count(): count the elements of the array

echo count($week);

echo '<br><br>';
//-----------------------------------------

//sort(): order array abc or 1 2 3...
//sort($week);

echo join(', ', $week);

echo '<br><br>';

//rsort(): order array cba or 3 2 1...
//rsort($week);

echo join(', ', $week);

echo '<br><br>';

//-------------------------------------------

//array_reverse(): reverse an array

$reversed_week = array_reverse($week);

echo join(', ', $reversed_week);

?>