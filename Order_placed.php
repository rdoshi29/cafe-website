﻿<!DOCTYPE html>
<html>
<head>
<title>TheCoffeePlace: Order placed</title>
<style>
a:link, a:visited {
  background-color: white;
  color: #000000;
  padding: 15px 25px;
  text-align: center;
  text-decoration:none;
  display: inline;
}
li{
	display: inline;
	text-decoration: none;
}
a:hover, a:active {
  background-color:pink ;
}
body{
	background-color: #FFE5CC;
	text-align: center;
	font-family: comic sans ms;
}
</style>
</head>
<body>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ24J25wHnfIOrrKJ-VyiOB-rqZoIcLVXQic4Q5Rd1DfBeFUJ4bzA" height="75" width="75">
<font size="8" color="#A0522D"> The coffee place </font><br>
<font size="6">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order_records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully";

$email = $_POST["Email"];
$phone = $_POST["Phone"];
$add = $_POST["Address"];
$ord = $_POST["Order1"];
$q = $_POST["Quantity"];
$sql = "INSERT INTO order_info VALUES ('$email','$phone','$ord','$add','$q')";
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully.";
} else {
    echo "Error: " . $conn->error;
}

 ?>

<ul>
<li><a href="home.html"><font color="#000000"> Home </font></a></li>
<li><a href="Aboutus.html"><font color="#000000"> About us </font></a></li>
<li><a href="menu.html"><font color="#000000"> Menu </font></a></li>
<li><a href="feedback.html"><font color="#000000"> Contact us </font></a></li>
</ul>
</font>
</body>
</html>
