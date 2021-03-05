<?php 

    $error = '';

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];

        if(!empty($name)) {
/*
            $name = trim($name);//remove white spaces
            $name = htmlspecialchars($name);//turn html special characters into text
            $name = stripslashes($name);//removes symbols like '/'
*/
            //another way to remove tags:
            $name = filter_var($name, FILTER_SANITIZE_STRING);//remove symbols

            echo "username: " . $name . '<br>';

        } else {
            $error .= 'Please fill out the field "name". <br>'; 
        }

        if(!empty($email)) {

            $email = filter_var($email, FILTER_SANITIZE_EMAIL);//validate email
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//if the email is not right
                $error .= 'That is not an email. 
                            Please fill out the field "email" properly. <br>';
            } else {             
                echo "email: " . $email . '<br>';
            }
            
        } else {
            $error .= 'Please fill out the field "email". <br>'; 
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {
        color:red;
    }
    </style>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="" class="">
        <input type="text" placeholder="Name:" name="name" id="">
        <br>
        <input type="text" placeholder="Email:" name="email" id="">
        <br>

        <?php if(!empty($error)): ?>

        <div class="error">
        <?php echo $error; ?>
        </div>

        <?php endif;?>

        <input type="submit" name="submit" value="send">
    </form>
    
</body>
</html> 