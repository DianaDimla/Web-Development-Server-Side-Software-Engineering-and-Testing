<?php

class UserAuthentication {
    
    private $conn; // Database connection
    
    // Constructor to initialize database connection
    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    // Method to authenticate user login
    public function login($username, $password) {
        // Prepare SQL statement to fetch user from database
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            // User found, verify password
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password correct, login successful
                $_SESSION['user_id'] = $user['id'];
                return true;
            } else {
                // Password incorrect
                return false;
            }
        } else {
            // User not found
            return false;
        }
    }

    // Method to logout user
    public function logout() {
        // Unset user session variables
        unset($_SESSION['user_id']);
    }
}

?>
