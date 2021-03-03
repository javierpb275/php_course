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
    ?>   
    </ul>
    
</body>
</html>