<?php 
require 'db.php';
session_start();
$cid= $_SESSION['name'];
$pid = $_POST['p_id'];

?>
<!doctype html>
<html>
<head>
</head>

<body>
<?php 
	$delete = "DELETE FROM cart WHERE c_id = '$cid' and p_id='$pid'";
	$conn->query($delete);
	header('location:cart.php')
?>
</body>
</html>