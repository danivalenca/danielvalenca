<?php

# Local
$servername = "localhost"; $username = "root"; $password = ""; $database = "";

# Web
#$servername = "localhost"; $username = ""; $password = ""; $database = "";

# Create connection
$connection = @mysqli_connect($servername,$username,$password,$database);

# Check connection
if (!$connection) die("Connection failed: " . mysqli_connect_error());

# Change character set to utf8
mysqli_set_charset($connection,"utf8");

?>
