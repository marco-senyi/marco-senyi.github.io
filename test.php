<?php
require 'db.php';
// Start the session
session_start();
$cid = $_SESSION['name'];
$address = $_POST['address'];
$total = $_POST['total'];
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
    <body>
<? 
if(isset($address)){
    ?>
    <table class="center" width="600pt">
        <tr>
            <td colspan="2" align="right">
    <img src="cart.png" width="60pt" height="60pt"><b><font size="20"><?echo("$".$total); ?></font></b></td>
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
    							<td>
								&nbsp;
								</td>
							</tr>
<tr>
    <td>
        Credit Card No.
</td>
<td align="right">
    CSV
</td>
</tr>
<tr>
    <td colspan="2">
    <input style="width:50pt" type="text" class="inputs" data-maxlength="4">-
    <input style="width:50pt" type="text" class="inputs" data-maxlength="4">-
    <input style="width:50pt" type="text" class="inputs" data-maxlength="4">-
    <input style="width:50pt" type="text" class="inputs" data-maxlength="4">
    <input style="width:40pt;float: right;" type="text" class="inputs" data-maxlength="3"></td>
</tr>
</table>
    <?


} ?>
</body>
</html>