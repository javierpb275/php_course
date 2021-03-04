<?php 

//Compare if the value on the right is smaller, or bigger, 
//or equal to the value on the left 
echo 0 <=> 1;
echo '<br>';
echo 1 <=> 1;
echo '<br>';
echo 1 <=> 0;
echo '<br>';
//return 1 if the value on the left is bigger 
//than the value on the right

//return 0 if both values are equal

//return -1 if the value on the right is bigger 
//than the value on the left

// <   =    >
// -1   0   1

$array = array(2, 5, 3, 7, 8);

//sort($array);

/*
function compare($a, $b) {
    if($a==$b) {
        return 0;
    } else if($a>$b) {
        return 1;
    } else {
        return -1;
    }
}
*/

function compare($a, $b) {
    return $a <=> $b;
}

//usort(): we pass an array and we may order it with the function
//that we pass as a second parameter
usort($array, 'compare');


echo implode(' - ', $array);