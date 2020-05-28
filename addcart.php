<? require 'db.php';
session_start();?>

<!DOCTYPE html>
<html>
    <body>
        <?php
			if(isset($_SESSION['name'])){
				$c_id = $_SESSION['name'];
				$p_id = $_POST['p_id'].$_POST['size'];
				$check = $conn->query("select * from product where p_id = '$p_id'");
				$rows = $check->fetch_assoc();

				if ($rows['quantity'] > 0){
					$add = "INSERT INTO cart VALUES('$c_id','$p_id')";
					$apply = $conn->query($add);
		?>
					<script>
					alert("Added to cart");
					</script>
		<?
					header('Refresh: 0; URL="catalog.php"');
				}
				else{
		?>
					<script>
					alert("Sorry, Out of stock.");
					</script>
		<?
					header('Refresh: 0; URL="catalog.php"');
				}
			}
			else{
		?>
				<script>
				alert("Please Login first");
				</script>
		<?php
				header('Refresh: 0; URL="catalog.php"');
			} 
		?>
	</body>
</html>