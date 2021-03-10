<?php

//require 'functions.php';

session_start();

//checkSession();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //strtolower(turn string to lowercase); filter_var(clean values)
    //FILTER_SANITIZE_STRING: in case a user tries to inject some code <b>
    $name = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

   

    $error = '';

    if (empty($name) or empty($password) or empty($password2)) {
        $error .= '<li>Please fill out the fields.</li>';
    } else {

        try {

            $connection = 
            new PDO('mysql:host=localhost;dbname=login_course', 'root', '');

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $connection->prepare('SELECT * FROM t_user 
        WHERE a_name = :a_name LIMIT 1');

        $statement->execute(array(
            ':a_name' => $name
        ));

        $result = $statement->fetch();

        if($result != false) {

            $error .= '<li>This user already exist.</li>';

        }

        //encrypt the password
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $error .= '<li>Both passwords are not equal.</li>';

        }

    }

    if ($error == '') {

        $statement = $connection->prepare('INSERT INTO t_user 
        (a_id, a_name, a_password) VALUES (NULL, :a_name, :a_password)');
        
        $statement->execute(array(
            ':a_name' => $name,
            ':a_password' => $password
        ));

        header('Location: login.php');

    }


}

require 'views/register.view.php';

?>