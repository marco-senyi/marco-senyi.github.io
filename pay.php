<!doctype html>
<?php
require 'db.php';
// Start the session
session_start();
$cid = $_SESSION['name'];
$address = $_POST['address'];
$total = $_POST['total'];
$check = 0;
$final = "";
$list = $_POST['p'];
$result = $conn->query("SELECT * FROM customer WHERE c_id='$cid'");
	$user = $result->fetch_assoc();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <Script>
        $(document).ready(function(){
            $(".inputs").keyup(function () {
                $this=$(this);
                if ($this.val().length >=$this.data("maxlength")) {
                  if($this.val().length>$this.data("maxlength")){
                    $this.val($this.val().substring(0,4));
                  }
                  $this.next(".inputs").focus();
                }
             });
        });
    </Script>
	</head>
    <body class="body1">
		<?
		if(isset($list)){
			$c_id = $_SESSION['name'];
			$str = explode (",", $list);
			$max = sizeof($str);
			for($i = 0; $i < $max;$i++)
				{
				$p_id = $str[$i];
				$res = $conn->query("SELECT * FROM product WHERE p_id = '$p_id'");
				$row = $res->fetch_assoc();
				if($row['quantity'] == 0){
					?>
					<br><br>
					<table class="center" width="60%">
						<tr>
							<td></td>
							<td colspan="4"><h3>Sorry! The following product is out of stock</h3></td>
						</tr>
						<tr>
						<td width ="20%"></td>
						<td width = "20%">
						<img src="<?echo($row['image']);?>" width="52pt" height="80pt">
						</td>
						<td  width ="20%">
							<? 
								if ($row['p_id'][0] != "a"){
									echo($row['p_name']." (".strtoupper(substr($row['p_id'],-1)).")");
								}
								else{
									echo($row['p_name']);
								}
							?>
						</td>
						<td><form method="post" action="delcart.php">
							<input type="hidden" name="p_id" value="<?=$row['p_id']?>">
							<input type="image" name="p_id" src="del.png" width="30pt" height="30pt" alt="submit">
							</form>
						</td>
				<?
				$check = 1;
				break;
				}
				else{
					if($final == ""){
						$final = $row['p_id'];
					}
					else{
						$final = $final.",".$row['p_id'];
					}
				}
			}
		}
		if($check == 0){
			?>
			<table class="center" width="600pt">
				<tr>
					<td colspan="2" align="right">
					<img src="pay.png" width="60pt" height="60pt"><b><font style="font-size:40px;"><?echo("$".$total); ?></font></b>
					</td>
				</tr>
				<tr>
					<td>
						<h3>Checkout</h3>
					</td>
				</tr>
				<tr>
					<td colspan="2">Shipping Address: <? echo("&nbsp;&nbsp;".$address);?></td>
				</tr>
				<tr>
    				<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Card Holder Name:</td>
					<td>
					<input style="width:200pt" type="text" class="inputs" placeholder="XXXX" data-maxlength="50">
					</td>
				</tr>
				<tr>
    				<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Credit Card No.</td>
					<td align="right">CSV</td>
				</tr>
				<tr>
					<td colspan="2">
					<input style="width:40pt" type="text" class="inputs" placeholder="XXXX" data-maxlength="4">-
					<input style="width:40pt" type="text" class="inputs" placeholder="XXXX" data-maxlength="4">-
					<input style="width:40pt" type="text" class="inputs" placeholder="XXXX" data-maxlength="4">-
					<input style="width:40pt" type="text" class="inputs" placeholder="XXXX" data-maxlength="4">
					<input style="width:30pt;float: right;text-align: right" type="text" class="inputs" data-maxlength="3">
					</td>
				</tr>
				<tr>
    				<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
					<form method="post" action="addorder.php">
						<input type="hidden" name="list" value="<?= $final ?>">
						<input type="hidden" name="address" value="<?= $address ?>">
						<h5><button>Pay</button></h5>
					</form>
					</td>
				</tr>
			</table>
			<?
		} ?>
	</body>
</html>