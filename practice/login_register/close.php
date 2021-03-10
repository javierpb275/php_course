<?php

session_start();

session_destroy();

$_SESSION = array();//so we clean the session. it is completely empty.

header('Location: login.php');

?>