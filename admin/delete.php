<?php
include('../connect.php');
$id = $_GET['id'];
$sql = "delete from users where id='$id'";
mysql_query( $sql);
header("location: index.php");
?>