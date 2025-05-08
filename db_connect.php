<?php
$servername = getenv("MYSQLHOST");
$username = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");
$dbname = getenv("MYSQLDATABASE");

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
