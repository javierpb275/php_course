<?php 

$months = array(
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'
);

$numbers = array(2, 1, 5, 3, 4);

//order abc
sort($months);
//order cba
rsort($months);

//order 1, 2, 3
sort($numbers);
//order 3, 2, 1
rsort($numbers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Months of the year</title>
</head>
<body>
    <h1>Months of the year</h1>
    <ul>
     <?php
        foreach($months as $month) {
            echo '<li>' . $month . '</li>';
        }
        foreach($numbers as $number) {
            echo '<li>' . $number . '</li>';
        }
    ?>   
    </ul>
    
</body>
</html>