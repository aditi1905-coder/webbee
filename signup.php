<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Note: Remember to hash the password for security

// Hash the password (for demonstration purposes, use stronger password hashing methods in production)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute SQL query to insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
