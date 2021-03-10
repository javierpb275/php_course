<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1>
        <hr class="border">

        <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        method="POST" class="form" name="login"
        >

        <div class="form-group">
			<i class="icon left fa fa-user"></i><input class="user" type="text" name="user" placeholder="User:">
		</div>

		<div class="form-group">
			<i class="icon left fa fa-lock"></i><input class="password" type="password" name="password" placeholder="Password">
		</div>

		<div class="form-group">
			<i class="icon left fa fa-lock"></i><input class="password_btn" type="password" name="password2" placeholder="Repeat password">
			<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>

<!-- Check if the variable error is set, in that case, we show the error -->
			<?php if(!empty($error)): ?>
				<div class="error">
					<ul>
						<?php echo $error; ?>
					</ul>
				</div>
			<?php endif; ?>
    
    </form>

        <p class="text-register">
            Do you already have an account?
            <a href="login.php">Log In</a>
        </p>
        
    </div>
</body>
</html>