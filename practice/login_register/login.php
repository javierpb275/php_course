<?php

session_start();

//require 'functions.php';

//checkSession();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    //encrypt the password
    $password = hash('sha512', $password);

    try {

        $connection = 
        new PDO('mysql:host=localhost;dbname=login_course', 'root', '');

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $connection->prepare(
        'SELECT * FROM t_user WHERE a_name = :a_name 
        AND a_password = :a_password'
    );
        
        $statement->execute(array(
            ':a_name' => $name,
            ':a_password' => $password
        ));

        $result = $statement->fetch();

        if($result !== false) {
            $_SESSION['user'] = $name;
            header('Location: index.php');
            echo "Hello " . $name;
        } else {
            $error .= '<li>wrong info</li>';
        }

}


require 'views/login.view.php';

?>