<?php 

$countries = array('Spain', 'USA', 'France', 'UK', 'Germany');

/*
foreach($countries as $country) {
    echo $country . '<br>';

    if($country == 'Spain') {
        break;
    }

}
*/

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
    <h1>European Countries</h1>
    <?php

    foreach($countries as $country) {
    
        if($country == 'USA' || $country == 'UK') {
            continue;
        }

        echo $country . '<br>';

    }
    
    ?> 
</body>
</html>