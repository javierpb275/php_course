<?php 

$error = '';
$sent = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //check name
    if (!empty($name)) {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $error .= 'Please fill out the field "name" <br>';
    }

    //check email
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//returns either false or the email
            $error .= 'Wrong Email. Please fill out the field with the right info. <br>';
        }
         
    } else {
        $error .= 'Please fill out the field "email" <br>';
    }

    //check message
    if (!empty($message)) {
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripslashes($message);
         
    } else {
        $error .= 'Please fill out the field "message" <br>';
    }

    if(!$error) {
        $send_to = 'yourname@yourcompany.com';
        $issue = 'Email sent from mywebsite.com';
        $message_ready = "From: $name \n";
        $message_ready .= "Email: $email \n";
        $message_ready .= "Message: " . $message;

        mail($send_to, $issue, $message_ready);
    }


}


require 'index.view.php';



?>