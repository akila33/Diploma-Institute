<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_PSWD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'institute1');


// Create connection
$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

// Check connection
if (!$dbcon) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";
?>