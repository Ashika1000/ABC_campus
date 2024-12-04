<?php
session_start(); // Start session for maintaining user login state
error_reporting(E_ALL);

// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'abc_campus';

// Capture user input from POST
$email = $_POST['LoginEmail'] ?? '';
$entered_password = $_POST['LoginPassword'] ?? '';

// Check if email and password are provided
if (empty($email) || empty($entered_password)) {
    header("location:login.php?msg=Email and Password are required!");
    exit;
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to fetch the user by email
$stmt = $conn->prepare("SELECT stu_password FROM student WHERE stu_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $stored_password = trim($row['stu_password']);

    // Verify the password
    if (password_verify($entered_password, $stored_password)) {
        // Success: Set session or other logic
        $_SESSION['user'] = $email; // Store user session
        header("location:dashboard.php?msg=Login successful!");
        exit;
    } else {
        // Incorrect password
        header("location:login.php?msg=Invalid Password!");
        exit;
    }
} else {
    // Email not found
    header("location:login.php?msg=Email not registered!");
    exit;
}

// Close connections
$stmt->close();
$conn->close();
?>
