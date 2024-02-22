<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="heading">
                <h2>Login</h2>
            </div>
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login">
            
        </form>
    </div>
</body>
</html>

<?php
// Enable error reporting
ini_set('display_errors',  1);
ini_set('display_startup_errors',  1);
error_reporting(E_ALL);

session_start(); // Start the session

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


   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $password = mysqli_real_escape_string($conn,$_POST['password']); 
   


   $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count == 1) {
      // echo"Welcome";
      $_SESSION['username']=$username;
      header("Location: ../admin/admin.php");
   }else {
      echo "Your Login Name or Password is invalid";
   }
}
?>

