<?php
	require 'db.php';
	$cidErr = $nameErr = $addressErr = $genderErr = $phoneErr = $passwordErr = "";
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (isset($_POST['submit'])) {

			require 'addmember.php';

		}

	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration</title>
		<style> 
			.error {color: #FF0000;}
		</style>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body class="body2">
	
		<center><h2>Member Registration</h2></center>
		<center><p><span class="error">* required field.</span></p></center>
		<form method="post" action="reg.php">
		
			<div class="container">
			
				<div class="row">
					User ID: <input type="text" placeholder="Enter User ID" name="c_id" pattern="[a-zA-Z0-9]{2,16}" required></input>
					<span class="error">* 2-16 letters or digits<?php echo $cidErr;?></span>
				</div>
				<br>
				
				<div class="row">
					Password:&nbsp;<input type="password" placeholder="Enter Password" name="password" pattern=".{8,}" required></input>
					&nbsp;
					<span class="error">* 8 or more characters</span>
				</div>
				<br>
				
				<div class="row">
					Name: <input type="text" placeholder="Enter your name" name="name" pattern="[\x20-\x7E]{2,16}" required></input>
					<span class="error">* 2-16 letters <?php echo $nameErr;?></span>
				</div>
				
				<div class="row">
					Gender:  
					<input type="radio" name="gender" value="F" checked> Female<?php if (isset($gender) && $gender=="F") echo "checked";?></input>
					<input type="radio" name="gender" value="M" checked> Male<?php if (isset($gender) && $gender=="M") echo "checked";?></input>
					<span class="error">* <?php echo $genderErr;?></span>
				</div>
				<br>
				
				<div class="row">
					Email Address: <input type="email" placeholder="Enter Address" name="address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></input>
					<span class="error">* <?php echo $addressErr;?></span>
				</div>
				
				<div class="row">
					Phone: <input type="text" placeholder="Enter Phone No." name="phone" pattern="[0-9]{8}" required></input>
					<span class="error">* <?php echo $phoneErr;?></span>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
						<input type="submit" name="submit" value="Submit">
					</div>
					<div class="col-sm-6">
						<input type="button" value="Back" name="back" onclick="javascript:location.href='login.php'" />
					</div>
				</div>
				
			</div>
			
		</form>
		
	</body>
</html>
