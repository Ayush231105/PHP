<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];

echo "<h2>Submitted Information</h2>";

echo "Full Name: " . htmlspecialchars($fullname) . "<br>";
echo "Email: " . htmlspecialchars($email);

?>
