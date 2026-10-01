<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "mysitedb";

// Create database connection
$conn = new mysqli(
    $servername,
    $dbusername,
    $dbpassword,
    $database
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get login data
$username = $_POST["username"];
$password = $_POST["password"];

// Search username and password
$sql = "SELECT * FROM registration
        WHERE username = ? AND password = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ss",
    $username,
    $password
);

$stmt->execute();

$result = $stmt->get_result();

// Check whether login details are found
if ($result->num_rows == 1) {

    // Login successful
    header("Location: q6 home.html");
    exit();

} else {

    // Login failed
    header("Location: q6 login.html");
    exit();
}

$stmt->close();
$conn->close();

?>
