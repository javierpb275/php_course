<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //strtolower(turn string to lowercase); filter_var(clean values)
    //FILTER_SANITIZE_STRING: in case a user tries to inject some code <b>
    $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    //echo "$user . $password . $password2";

    $error = '';

    if (empty($user) or empty($password) or empty($password2)) {
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
            ':a_name' => $user
        ));

        $result = $statement->fetch();

        if($result != false) {

            $error .= '<li>This user already exist.</li>';

        }

    }
}

require 'views/register.view.php';

?>