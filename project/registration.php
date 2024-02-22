<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your password if needed
$dbname = "bhumi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if passwords match
if ($_POST['password'] !== $_POST['confirmPassword']) {
    // Passwords do not match, show an error message
    echo "<script>alert('Password and Confirm Password do not match.');</script>";
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (name, username, password, number, email) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $username, $password, $number, $email);

// Set parameters and execute
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password']; // Hash the password before storing it
$number = $_POST['number'];
$email = $_POST['email'];


if ($stmt->execute()) {
    // Redirect to a success page
    header("Location: ../project/login.php");
    exit;
} else {
    echo "Registration failed. Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>