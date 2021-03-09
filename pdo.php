<?php 

$id = $_GET['a_user_id'];

try {

    //parameter1:db we are working with, the host we wanna connect to, db name;
    //parameter2: username; parameter3: password
    $connection = new PDO('mysql:host=localhost;dbname=test_console', 'root', '');
    echo "Connection successful.";
    echo '<br>';

    //Query Method
    $results = $connection->query("SELECT * FROM t_users WHERE a_user_id = $id");
    //$results = $connection->query('INSERT INTO t_users VALUES(NULL, "Peter", "peter@gmail.com")');

    foreach($results as $row) {
        //print_r($row);
        echo $row['a_user_id'] . ' - ' . $row['a_name'];
        echo '<br>';
    }

} catch(PDOException $e) {
    echo $e->getMessage();
}

?>