<?php
error_reporting(E_ALL);

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'abc_campus';

// Capture POST data
$Fname = $_POST["FirstName"] ?? null;
$Lname = $_POST["LastName"] ?? null;
$email = $_POST["Email"] ?? null;
$pswd = $_POST["Password"] ?? null;
$Cpswd = $_POST["ConfirmPassword"] ?? null;

// Check for empty fields
if (!$Fname || !$Lname || !$email || !$pswd) {
    die("Missing required form fields.");
}

if ($pswd !== $Cpswd) {
    header("location:register.php?msg=Passwords do not match!");
    exit;
}

// Hash the password
$hashed_password = password_hash($pswd, PASSWORD_DEFAULT);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("MySQL Connection Error: " . mysqli_connect_error());
}

// Prepare the query
$stmt = $conn->prepare("INSERT INTO student (first_name, last_name, stu_email, stu_password) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters and execute
$stmt->bind_param("ssss", $Fname, $Lname, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Query Executed";
    header("Location: register.php?msg=Registration Successful!");
    die();
} else {
    die("Execution failed: " . $stmt->error);
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
