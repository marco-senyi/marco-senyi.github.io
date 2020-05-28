<? require 'db.php';
session_start();
$c_id = $_SESSION['name'];
$list = $_POST['list'];
$add = $_POST['address'];
?>
<html>
    <body>
        <?php
$str = explode (",", $list);
$max = sizeof($str);
for($i = 0; $i < $max;$i++)
    {
    $p_id = $str[$i];
    $res = $conn->query("SELECT * FROM product WHERE p_id = '$p_id'");
    $row = $res->fetch_assoc();
    $del = $conn->query("DELETE FROM cart Where c_id ='$c_id' and p_id = '$p_id'");
    }
$order = $conn->query("INSERT INTO orders VALUES(null,'$c_id','$list','$add')");
$quan = $conn->query("SELECT quantity from products where p_id = '$p_id' ");
$quan = $quan - 1;
$minus = $conn->query("UPDATE products set quantity = '$quan' where p_id = '$p_id'");
?><script>
        alert("Payment Succeed!");
        </script>
        <?
        header('Refresh: 0; URL="profile.php"');
?>
</body>
</html>