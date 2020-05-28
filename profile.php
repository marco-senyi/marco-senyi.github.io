<?php
require 'db.php';
// Start the session
session_start();
$cid = $_SESSION['name'];
$sum = 0;
$result = $conn->query("SELECT * FROM customer WHERE c_id='$cid'");
	$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body class="body1">
		<center><h3>Hello <?php echo $user['c_name'] ?> !</h3></center>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						User ID:
					</div>
					<div class="col-sm-6">
						<? echo($user['c_id']) ?>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-6">
						User Name:
					</div>
					<div class="col-sm-6">
						<? echo($user['c_name']) ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						Gender:
					</div>
					<div class="col-sm-6">
						<? echo($user['gender']) ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						Phone:
					</div>
					<div class="col-sm-6">
						<? echo($user['phone']) ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						Email Address:
					</div>
					<div class="col-sm-6">
						<? echo($user['address']) ?>
					</div>
				</div>
			</div>				

				<!--Connect Record-->
				<? $result = $conn->query("SELECT * FROM orders WHERE c_id='$cid'");
				?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<center><h3>Records</h3></center>
			<div class="container">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Post ID</th>
							<th>Action</th>
							<th>Connect Date</th>
							<th>District</th>
							<th>Mask Brand</th>
							<th>Mask Level</th>
							<th>Mask Size</th>
							<th>Amount</th>
						</tr>
					<thead>
				<br>
				<tbody>
				<? while($rows = $result->fetch_assoc()){ ?>
					<tr>
						<td><?echo "#".$rows['o_id'];?></td><!--PostID-->
						<td><?echo "#".$rows['o_id'];?></td><!--Give/Get-->
						<td><?echo "#".$rows['o_id'];?></td><!--Date-->
						<td><?echo "#".$rows['o_id'];?></td><!--District-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Brand-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Level-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Size-->
						<td><?echo "#".$rows['o_id'];?></td><!--Amount-->
					</tr>
						<? $string = $rows['products'];
							$str = explode (",", $string);
							$max = sizeof($str);
							for($i = 0; $i < $max;$i++)
								{	
									$p_id = $str[$i];
									$res = $conn->query("SELECT * FROM product WHERE p_id = '$p_id'");
									$row = $res->fetch_assoc();
									$sum = $sum + $row['price'];
								}
								echo("$".$sum);
								$sum = 0;
								?>

				<tr><TH COLSPAN=4><hr></th></tr>
					<? $string = $rows['products'];
						$str = explode (",", $string);
						$max = sizeof($str);
						for($i = 0; $i < $max;$i++)
							{
								?><tr>
									<? $p_id = $str[$i];
										$res = $conn->query("SELECT * FROM product WHERE p_id = '$p_id'");
										$row = $res->fetch_assoc()
										?>
									<td >
										<img src="<?echo($row['image']);?>" width="52pt" height="80pt">
										<td>
									<td   >
										<? 
										if ($row['p_id'][0] != "a"){
											echo($row['p_name']." (".strtoupper(substr($row['p_id'],-1)).")");
										}
										else{
											echo($row['p_name']);
										}
										
										?>
									</td>

									</tr>
							<?}?>
							<tr>
    							<td>
								&nbsp;
								</td>
							</tr>
							<tr>
    							<td>
								&nbsp;
								</td>
							</tr>
						
				</tr>
				<? } ?>
				</tbody>
				</table>
			</div>

</body>
</html>
