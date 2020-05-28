<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Registration</title>
	</head>

	<body class="body2">
		<?php
			$cidErr = $nameErr = $passwordErr = $addressErr =  $genderErr = $phoneErr = "";
			$password = $name = $c_id = $address = $gender = $phone = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				//id validation
				if(!empty($_POST["c_id"])){
					$c_id = $_POST["c_id"];
					if(!preg_match("/^[a-zA-Z0-9]{6,8}$/",$c_id)){
						$cidErr = "This User ID is invalid";
					}
				}
				if(!empty($_POST["password"])){
					$password = $_POST["password"];
					if(!preg_match("/^[a-zA-Z0-9]{6,8}$/",$password)){
						$passwordErr = "This password is invalid";
					}
				}
				if(!empty($_POST["name"])){
					$name = $_POST["name"];
					if(!preg_match("/^[a-zA-Z]{0,10}$/",$name)){
						$nameErr = "This name is invalid";
					}
				}

				if(!empty($_POST["address"])){
					$address = $_POST["address"];
					if(!preg_match("/^[a-zA-Z0-9, ]{0,50}$/",$address)){
						$addressErr = "This address is invalid";
					}
				}
				
				if(!empty($_POST["gender"])){
					$gender = $_POST["gender"];
				}

				if(!empty($_POST["phone"])){
					$phone = $_POST["phone"];
				}



				
				if ($cidErr =="" && $passwordErr =="" && $phoneErr =="" && $addressErr =="" && $genderErr ==""){	
					$add = "INSERT INTO accounts VALUES('$c_id','$password')";
					$action = $conn->query($add);
					$sql = "INSERT INTO customer VALUES('$c_id','$name','$gender','$address','$phone')";
					if ($conn->query($sql) == true){
						?>	
							<script>
							alert("Regristration Succeed!");
							</script>
						<?php
							header('Refresh: 0; URL="login.php"');

					}
					else{
						echo ("Error: " . $conn->error);
					}
				}
				
				
			}
		
		?>
	</body>
</html>