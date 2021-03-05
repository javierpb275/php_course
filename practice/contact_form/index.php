<?php 

$error = '';
$sent = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($name)) {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $error .= 'Please fill out the field "name" <br>';
    }

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//returns either false or the email
            $error .= 'Wrong Email. Please fill out the field with the right info. <br>';
        }
         
    } else {
        $error .= 'Please fill out the field "email" <br>';
    }


}


require 'index.view.php';



?>