<?php 
    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];

        if(!empty($name)) {

            $name = trim($name);//remove white spaces
            $name = htmlspecialchars($name);//turn html speacial characters into text
            $name = stripslashes($name);//removes symbols like '/'

            //7:20. 46 Validando un formulario

            echo "username: " . $name . '<br>';
        }

        
        echo "email: " . $email . '<br>';

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="" class="">
        <input type="text" placeholder="Name:" name="name" id="">
        <br>
        <input type="email" placeholder="Email:" name="email" id="">
        <br>
        <input type="submit" name="submit" value="send">
    </form>
    
</body>
</html> 