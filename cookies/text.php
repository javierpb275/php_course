<?php 

if (isset($_COOKIE['font-size'])) {
    $size = htmlspecialchars($_COOKIE['font-size']);//use htmlspeacilchars() so to protect from code injection
} else {
    $size = '20px';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
    <style>
    p {
        font-size: <?php echo $size; ?>;
    }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur laudantium 
    tempore voluptas distinctio quasi in, doloribus modi ipsam rem esse quas incidunt 
    magnam excepturi nesciunt? Doloribus facilis debitis ipsum aspernatur.</p>
</body>
</html>