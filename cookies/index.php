<?php

//Cookies: small files that the server creates in the user's computer in order to save
//info that we wanna store so when the user start session they could load certain preferences
//for example: the font size that user set.

//parameter1: name. parameter2: value. parameter3: time we wanna keep for our cookie
//time() returns this exact moment. this cookie will last 30 days.
//parameter4: where we want our cookie to be available. for example a folder: /admin
//the cookie will be available in the whole domain: /

//cookies: only 4 megabytes of text
setcookie('font-size', '40px', time() + 60 * 60 * 24 * 30, '/');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
<body>
    <h1>SET COOKIE</h1>
</body>
</html>