<?php
$host = 'localhost'; // atau 127.0.0.1
$db = 'utskomweb'; // Nama database
$user = 'root'; // Username MySQL
$pass = ''; // Password MySQL
$port = '3360'; //Port MySQL

// Buat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>