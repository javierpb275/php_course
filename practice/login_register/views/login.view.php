<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
	<title>Log In</title>
</head>
<body>
	<div class="container">
		<h1 class="title">Log In</h1>
		
		<hr class="border">

		<form class="form" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="form-group">
				<i class="icon left fa fa-user"></i><input class="user" type="text" name="user" placeholder="User">
			</div>

			<div class="form-group">
				<i class="icon left fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Password"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

		</form>

		<p class="text-register">
			Do not have an account?
			<a href="register.php">Register</a>
		</p>

	</div>
</body>
</html>