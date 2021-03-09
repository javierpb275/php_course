<?php

$connection = new mysqli('localhost', 'rot', '', 'test_console');

//0: ok; 1045: error
//if there's an error we stop the execution of the page
if($connection->connect_errno) {
    die('ERROR CONNECTING TO SERVER');
} else {
    
}

?>