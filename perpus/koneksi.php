<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// Create a MySQLi connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully";
?>
