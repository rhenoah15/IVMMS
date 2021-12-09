<?php
include('../connect.php');
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$contact = date('Y-m-d', strtotime($contact));
 $save1=mysql_query("INSERT INTO users (name,address,contact,gender) VALUES ('$name','$address','$contact','$gender')");
 
echo "<script type=\"text/javascript\">window.alert('User record has been added');window.location.href = 'index.php';</script>"; 
?>