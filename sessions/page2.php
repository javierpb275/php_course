<?php 

session_start();

if ($_SESSION) {
    $name = $_SESSION['name'];
    echo"<h1>Hola, $name </h1>";
} else {
    echo "You have not started session.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <a href="close.php">close session</a>
</body>
</html>