<?php

include_once 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email and password from form submission (ensure to sanitize inputs to prevent SQL injection)
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];

// Prepare SQL statement to retrieve user information based on provided email and password
$sqluser = "SELECT * FROM User WHERE email_user='$email_user' AND password_user='$password_user'";
$resultuser = $conn->query($sqluser);

if ($resultuser->num_rows > 0) {
    // Login successful, redirect to success page
    header("Location: Homepage.php");
    exit();
} else {
    // Login failed, redirect back to login page
    header("Location: checkout.php");
    exit();
}

$conn->close();
?>
