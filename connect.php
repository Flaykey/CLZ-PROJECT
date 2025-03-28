<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Couldn't connect to server: " . mysqli_connect_error());
}

$database = "CREATE DATABASE IF NOT EXISTS ACCOUNT";
if (!mysqli_query($conn, $database)) {
    die("Database not created: " . mysqli_error($conn));
}

mysqli_select_db($conn, "ACCOUNT");

$create_table = "CREATE TABLE IF NOT EXISTS ACCOUNTS (
    USERNAME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $create_table)) {
    die("Error creating table: " . mysqli_error($conn));
}

?>