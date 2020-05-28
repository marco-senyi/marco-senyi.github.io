<!doctype html>
<?php
require 'db.php';
session_start();
if (isset($_SESSION['name'])) {
    $cid = $_SESSION['name'];
}
$pid = $_POST["p_id"];
if( substr($pid,0,1) != "a"){
    $pid = $pid."s";
}
$result = $conn->query("SELECT * FROM product WHERE p_id = '$pid'");
$rows = $result->fetch_assoc();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Detail</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    <body class="body1">
        <center>
            <h3>Product Infromation</h3>
    <table>
        <tr>
            <td rowspan="3">
            <img src=" <? echo ($rows['image']);?>" width="390pt" height="600pt">
</td>
<td>
								&nbsp;
                                </td>
                                <td>
								Name: 
                                </td>
<td>
<? echo ($rows['p_name']);?>
</td>
</tr>
<tr>
<td>
								&nbsp;
                                </td>
                                <td>
								Price($):
                                </td>
    <td>
    <? echo ($rows['price']);?>
</td>
</tr>
<tr>
<td>
								&nbsp;
                                </td>
    <td>
    <a href="catalog.php"><input type="button" value="Back"></a>
</td>
</tr>
        <table>
</center>
        </body>
    </html>
