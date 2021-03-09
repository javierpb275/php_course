<?php

$connection = new mysqli('localhost', 'root', '', 'test_console');


if($connection->connect_errno) {
    die('ERROR CONNECTING TO SERVER');
} 

else {

    $id = isset($_GET['a_user_id']) ? $_GET['a_user_id'] : 2;
    $sql = "SELECT * FROM t_users WHERE a_user_id = $id";
    $result = $connection->query($sql);

    //num_rows: number of rows
    if($result->num_rows) {
        //fetch_assoc: 1 row (array of atributes)
        /*
        echo '<pre>';
        var_dump($result->fetch_assoc());
        var_dump($result->fetch_assoc());
        echo '</pre>';
        */
        while($row = $result->fetch_assoc()) {
            echo $row['a_user_id'] . ' - ' . $row['a_name'] 
            . ' - ' . $row['a_email'] . '<br>';
        }

        //echo $result->fetch_assoc()['a_name'];

    } else {
        echo 'no data';
    }
    
}

?>