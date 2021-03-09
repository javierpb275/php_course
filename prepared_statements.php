<?php 

//$id = $_GET['a_user_id'];
//$name = $_GET['a_name'];

try {

    $connection = new PDO('mysql:host=localhost;dbname=test_console', 'root', '');
    echo "Connection successful.";
    echo '<br>';

    //Prepared statements 
    $statement = $connection->prepare('INSERT INTO t_users VALUES(NULL, "lola", "lola@gmail.com")');
    //$statement = $connection->prepare('SELECT * FROM t_users');
    //WHERE a_user_id = :a_user_id');
/*
    $statement->execute(
        array(
            ':a_user_id' => $id
            )
    );
*/
    $statement->execute();

    //$results = $statement->fetch();
    /*
    $results = $statement->fetchAll();

    foreach ($results as $user) {
        echo $user['a_name'];
    }
    */
/*
    echo "<pre>";
    print_r($results);
    echo "</pre>";
*/

} catch(PDOException $e) {
    echo $e->getMessage();
}

?>