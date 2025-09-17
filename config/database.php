<?php

// Environment check: Local vs Remote
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    
    $db_host = 'localhost';
    $db_name = 'danielvalenca';
    $db_user = 'root';
    $db_pass = '';

} else {
    
    $db_host = 'localhost';
    $db_name = 'u456560808_danielvalenca';
    $db_user = 'u456560808_danielvalenca';
    $db_pass = 'DanielValenca@2020-11-19';

}

// Create MySQLi connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    exit("Database connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 (full Unicode support, including emojis)
$conn->set_charset("utf8mb4");

?>