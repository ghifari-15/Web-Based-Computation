<?php
// Menghubungkan ke database

include 'connect.php';

// Proses query pertama
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitButton"])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Hai $name, datamu berhasil dikirim! ")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
