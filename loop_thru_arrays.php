<?php 

$months = array(
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'
);

for ($i=0; $i < count($months); $i++) { 
    echo $months[$i] . '<br/>';
}

$counter = 0;

while ($counter < count($months)) {
    echo $months[$counter] . '<br/>';
    $counter++;
}

?>