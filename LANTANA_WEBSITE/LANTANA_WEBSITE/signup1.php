<?php
include_once 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name_user = $_POST['name_user'];
    $email_user = $_POST['email_user'];
    $address_user = $_POST['address_user'];
    $password_user = $_POST['password_user'];
    $phoneNo_user = $_POST['phoneNo_user'];
    $age_user = $_POST['age_user'];
    
    // SQL to insert user information
    $sql = "INSERT INTO User (idUser, name_user, email_user, address_user, password_user, phoneNo_user, age_user) 
            VALUES (NULL, '$name_user', '$email_user', '$address_user', '$password_user', '$phoneNo_user', '$age_user')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
