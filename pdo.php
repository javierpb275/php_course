<?php 

try {

    //parameter1:db we are working with, the host we wanna connect to, db name;
    //parameter2: username; parameter3: password
    $connection = new PDO('mysql:host=localhost;dbname=test_console', 'root', '');
    echo "Connection successful.";
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>