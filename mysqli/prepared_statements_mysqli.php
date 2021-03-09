<?php

$connection = new mysqli('localhost', 'root', '', 'test_console');


if($connection->connect_errno) {
    die('ERROR CONNECTING TO SERVER');
} 

else {

    $statement = $connection->prepare("INSERT INTO t_users
    (a_user_id, a_name, a_email) VALUES(?, ?, ?)");

    //Replace the placeholder ? with the values we wanna use
        //An S for each placeholder
        // s= string
        // i = integer
        // d = double

    //bind_param(): what are the values that we wanna add (?, ?, ?).
    //$statement->bind_param('sss');

    
    if($connection->affected_rows >= 1) {
        echo 'rows inserted: ' . $connection->affected_rows;
    }
    
}

?>