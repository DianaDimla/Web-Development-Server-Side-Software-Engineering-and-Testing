<?php

class UserRegistration {
    
    private $conn; // Database connection
    
    // Constructor to initialize database connection
    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    // Method to register a new user
    public function register($username, $password, $name, $email, $address, $phoneNo) {
        // Check if username or email already exists
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username or email already exists
            return false;
        } else {
            // Insert new user into database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users (username, password, name, email, address, phoneNo) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $username, $hashed_password, $name, $email, $address, $phoneNo);
            
            if ($stmt->execute()) {
                // Registration successful
                return true;
            } else {
                // Registration failed
                return false;
            }
        }
    }

    // Method to validate email format
    public function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

?>
