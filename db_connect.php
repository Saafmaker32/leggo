<?php
$servername = getenv("MYSQLHOST") ?: "mysql.railway.internal";
$username = getenv("MYSQLUSER") ?: "root";
$password = getenv("MYSQLPASSWORD") ?: "pRKEyAIEdNvRADfVwlVxEnwnGJhVVhAD";
$dbname = getenv("MYSQLDATABASE") ?: "railway";

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
