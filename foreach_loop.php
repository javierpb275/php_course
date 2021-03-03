<?php 

$months = array(
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'
);

$alex = array(
    'phone' => 123414231431, 
    'age' => 24, 
    'country' => 'USA'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USER INFO</h1>
    <ul>
    <?php

    /*
        foreach($months as $month) {
            echo '<li>' . $month . '</li>';
        }
    */

        foreach($alex as $property => $value) {
            echo '<li>' . $property . ' : ' . $value . '</li>';
        }

    ?>   
    </ul>
</body>
</html>