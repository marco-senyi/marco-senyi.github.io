<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style2.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="c_id" placeholder="Username" id="c_id" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
                <a href="reg.php"><input type="button" value="Sign Up"></a>
                &nbsp;&nbsp;&nbsp;
                <a href="index.html" target="_top"><input type="button" value="Back"</a>
			</form>
		</div>
	</body>
</html>