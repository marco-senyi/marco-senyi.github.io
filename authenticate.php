<html>

	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<style>
			input[type="button"] {
				width: 100%;
				padding: 15px;
				margin-top: 20px;
				background-color: #3274d6;
				border: 0;
				cursor: pointer;
				font-weight: bold;
				color: #ffffff;
				transition: background-color 0.2s;
			}
			input[type="button"]:hover {
				background-color: #224274;
				transition: background-color 0.2s;
			}
		</style>
	</head>

	<body>
		<?
			session_start();
			require 'db.php';
			if ( !isset($_POST['c_id'], $_POST['password']) ) {
				// Could not get the data that should have been sent.
				die ('Please fill both the username and password field!');
			}
			if ($stmt = $conn->prepare('SELECT password FROM accounts WHERE c_id = ?')) {
				$stmt->bind_param('s', $_POST['c_id']);
				$stmt->execute();
				// Store the result so we can check if the account exists in the database.
				$stmt->store_result();
			}
			if ($stmt->num_rows > 0) {
				$stmt->bind_result($password);
				$stmt->fetch();
				// Account exists, now we verify the password.
				// Note: remember to use password_hash in your registration file to store the hashed passwords.
				if ($_POST['password'] === $password) {
					// Verification success! User has loggedin!
					// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['name'] = $_POST['c_id'];
					//header('Location: index.html');
		?>
					<script>
						window.top.location.href = "index.html"; 
					</script>
		<?
				} else {
		?>
				<script>
					alert("Incorrect Password!");
				</script>
		<?		
				header('Refresh: 0; URL="login.php"');
				}
			} else {
		?>
				<script>
					alert("Incorrect Username!");
				</script>
		<?
				header('Refresh: 0; URL="login.php"');
			}
			$stmt->close();
		?>
	</body>
</html>