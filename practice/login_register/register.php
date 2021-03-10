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

    echo "$user . $password . $password2";
}

require 'views/register.view.php';

?>