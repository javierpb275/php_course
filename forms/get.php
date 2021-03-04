<?php


 //print_r($_POST);

 //we check if we send data thru the method post
 //if there is no post: header(): it sends us to that url
 if (!$_POST) {
    header('Location: http://localhost/php_course/forms/');
 } 

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $year = $_POST['year'];
    $terms = $_POST['terms'];
   
    echo 'Hello ' . $name . '. Your are ' . $gender;

/*
//print_r($_GET);

    if (!$_GET) {
    header('Location: http://localhost/php_course/forms/');
    } 


    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $year = $_GET['year'];
    $terms = $_GET['terms'];

    if($name) {
        echo $name . '<br>';
    } else {
        echo "You have not set your username. 
                Please fill out that field <br>";
    }

    echo $gender . '<br>';
    echo $year . '<br>';
    echo $terms . '<br>';
*/
?>