<?php
require 'db.php';
// Start the session
session_start();
$cid = $_SESSION['name'];
$total = 0;
$p = "";
$add = $conn->query("SELECT * FROM customer where c_id='$cid'");
$rows = $add->fetch_assoc();
$add = $rows['address'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body class="body1">
		<center><h1>Cart</h1></center>
			<div class="container">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Post ID</th>
							<th>Connect Date</th>
							<th>District</th>
							<th>Mask Brand</th>
							<th>Mask Level</th>
							<th>Mask Size</th>
							<th>Amount</th>
							<th>Remove</th>
							<th>Connect!</th>
						</tr>
					<thead>
				<br>
				<tbody>
				<? while($rows = $result->fetch_assoc()){ ?>
					<tr>
						<td><?echo "#".$rows['o_id'];?></td><!--PostID-->
						<td><?echo "#".$rows['o_id'];?></td><!--Date-->
						<td><?echo "#".$rows['o_id'];?></td><!--District-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Brand-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Level-->
						<td><?echo "#".$rows['o_id'];?></td><!--Mask Size-->
						<td><?echo "#".$rows['o_id'];?></td><!--Amount-->
						<td><!--Delete from bookmark-->
							<form method="post" action="delcart.php">
                            <input type="hidden" name="p_id" value="<?=$rows['p_id']?>">
                            <input type="image" name="p_id" src="del.png" width="30pt" height="30pt" alt="submit">
                            </form>
                        </td>
						<td><!--Confirm to connect-->
							<form method="post" action="#form-anchor" id="form-anchor">
							<input type="hidden" name="total" value="<?=$total ?>" >
							<button>Connect</button>                              
							</form>
						</td>

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

                <tr><TH COLSPAN=4><hr></th></tr>
                    <tr>
                    <td></td>
                    <td align="right">Total:&nbsp;&nbsp;</td>
                    <td ><h3><?echo(" $".$total);?></h3></td>

                    
                </tr>
                </table>
                <br><br>
                <? if(isset($_POST['total'])){
                    ?>
                    <form method="post" action="pay.php">
                    <table class="center">
                        <tr>
                        <td>
                        Email Address: <input type="text" name="address" value="<?=$add ?>">
                        <input type="hidden" name="total" value="<?=$total ?>" ><td>
                        <input type="hidden" name="p" value="<?=$p ?>" >
                       <td> <input type="submit" name="submit" value="Confirm"></td>
                </tr>
                </table>
                <br><br><br>
                    </form>
                <? }
                ?>
                
    </body>
</html>