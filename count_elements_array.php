<?php 

$months = array(
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'
);

//count() returns the number of values that we have inside an array
$last_month = count($months) - 1;
echo $months[$last_month];

?>