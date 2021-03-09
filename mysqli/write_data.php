<?php

$connection = new mysqli('localhost', 'root', '', 'test_console');


if($connection->connect_errno) {
    die('ERROR CONNECTING TO SERVER');
} 

else {

    $sql = "INSERT INTO t_users(a_user_id, a_name, a_email) 
    VALUES(null, 'luis', 'luis@gmail.com')";
    $connection->query($sql);

    //how many rows where inserted
    if($connection->affected_rows >= 1) {
        echo 'rows inserted: ' . $connection->affected_rows;
    }
    
}

?>