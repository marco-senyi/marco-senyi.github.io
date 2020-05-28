<?php 
	include 'db.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		body {
			background-color: #cfe3f2;
		}
    </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-sm-2 align-self-center" >
				<a href="main.php" target="2"><img src="icon.jpg" width="100px" height="100px" class="rounded-circle"></a>
			</div>
			
            <div class="col-sm-5 align-self-center">
				<div class="row">
					<a href="main.php" target="2"><input type="button" value="Connect!"></a>
					<a href="post.php" target="2"><input type="button" value="Start a Post"></a>
					<a href="about.html" target="2"><input type="button" value="About Us"></a>

				</div>
            </div>

            <div class="col-sm-5 align-self-center">
                 <div class="row justify-content-end">
					<? 
						session_start();
						if (isset($_SESSION['loggedin'])) {	
					?>
							<a href="profile.php" target="2"><input type="button" value="My Profile"></a>
							<a href="cart.php" target="2"><input type="button" value="bookmark"></a>
							<a href="logout.php" target="2"><input type="button" value="Logout"></a>
					<?
						}
						else{ 
					?>
                             <a href="login.php" target="2"><input type="button" value="Login"></a>
					<?
						}	
					?>
                 </div>
             </div>
		</div>
	</div>
</body>
</html>
