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
					User ID: <input type="text" placeholder="Enter User ID" name="c_id" pattern="[a-zA-Z0-9]{6,8}" required></input>
					<span class="error">* 6-8 letters or digits<?php echo $cidErr;?></span>
				</div>
				<div class="row">
					Password: <input type="text" placeholder="Enter Password" name="password" pattern="[a-zA-Z0-9]{6,8}" required></input>
					<span class="error">* 6-8 letters or digits</span>
				</div>
				<div class="row">
					Name: <input type="text" placeholder="Enter your name" name="name" pattern="[a-zA-Z]{0,10}" required></input>
					<span class="error">* <?php echo $nameErr;?></span>
				</div>
				<div class="row">
					Gender:  
					<input type="radio" name="gender" value="F" checked> Female<?php if (isset($gender) && $gender=="F") echo "checked";?></input>
					<input type="radio" name="gender" value="M" checked> Male<?php if (isset($gender) && $gender=="M") echo "checked";?></input>
					<span class="error">* <?php echo $genderErr;?></span>
				</div>
				<div class="row">
					Email Address: <input type="text" placeholder="Enter Address" name="address" pattern="^[a-zA-Z0-9, ]{0,50}" required></input>
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
