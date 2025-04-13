<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print form values
    //echo "<pre>";
   // print_r($_POST);
   // echo "</pre>";
    //exit();

    // Check if form fields exist
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        die("Error: Form fields missing.");
    }

    // Trim and validate input
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($email) || empty($password)) {
        die("Error: All fields are required.");
    }

    // Check if email already exists
    $check_email = "SELECT email FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($check_email);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        die("Error: Email already registered. Please log in.");
    }

    // Hash password before saving
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<div style='text-align: center; margin-top: 50px; font-family: Arial, sans-serif;'>
                <h2 style='color: green;'>🎉 Registration Successful!</h2>
                <p>You can now <a href='splogin.html' style='color: blue; text-decoration: underline;'>Login here</a>.</p>
              </div>";
        exit(); // Stop script execution after showing message
    }
    
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $stmt_check->close();
    $conn->close();

?>