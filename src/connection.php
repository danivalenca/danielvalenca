<?php

# Local
$servername = "localhost"; $username = "root"; $password = ""; $database = "danielvalenca";

# Web
#$servername = "localhost"; $username = "u456560808_danielvalenca"; $password = "DanielValenca@2020-11-19"; $database = "u456560808_danielvalenca";

# Create connection
$connection = @mysqli_connect($servername,$username,$password,$database);

# Check connection
if (!$connection) die("Connection failed: " . mysqli_connect_error());

# Change character set to utf8
mysqli_set_charset($connection,"utf8");

?>