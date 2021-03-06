<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" 
        class="form-control" 
        id="name" name="name" 
        placeholder="Name:" 
        value="<?php if(!$sent && isset($name)) echo $name ?>">
        <input type="text" 
        class="form-control" 
        id="email" name="email" 
        placeholder="Email:" 
        value="<?php if(!$sent && isset($email)) echo $email ?>">
        <textarea name="message" class="form-control" id="message" placeholder="Message:"><?php if(!$sent && isset($message)) echo $message ?></textarea>

        <?php if (!empty($error)): ?>

            <div class="alert error">
                <?php echo $error; ?>
            </div>
           
        <?php elseif ($sent): ?>

            <div class="alert success">
                <p>Sent Correctly</p>
            </div>

        <?php endif ?> 

        <input type="submit" name="submit" class="btn btn-primary" value="Send Email">
    </form>
</div> 
</body>
</html>