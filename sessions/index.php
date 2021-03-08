<?php 

session_start();

$_SESSION['name'] = 'Pepe';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Home Page</h1>
    <p></p>
    <a href="page2.php">Page 2</a>
</body>
</html>