<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">

    <label>Username:</label>
    <input type="text" name="username">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email">
    <br><br>

    <label>Gender:</label>

    <input type="radio" name="gender" value="m"> Male
    <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="o"> Other

    <br><br>

    <label>Mobile No:</label>
    <input type="text" name="mobile">
    <br><br>

    <label>Country:</label>

    <select name="country">
        <option value="">--Select Country--</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>
    </select>

    <br><br>

    <label>Password:</label>
    <input type="password" name="password">
    <br><br>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password">
    <br><br>

    <input type="checkbox" name="terms" value="yes">

    I agree to the terms and condition

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php

if (isset($_POST['submit'])) {

    echo "<h2>Registration Data</h2>";

    echo "Username: " . htmlspecialchars($_POST['username']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
    echo "Mobile: " . htmlspecialchars($_POST['mobile']) . "<br>";
    echo "Country: " . htmlspecialchars($_POST['country']) . "<br>";
    echo "Password: " . htmlspecialchars($_POST['password']) . "<br>";
    echo "Confirm Password: " . htmlspecialchars($_POST['confirm_password']) . "<br>";

    if (isset($_POST['terms'])) {
        echo "Terms: Accepted";
    } else {
        echo "Terms: Not Accepted";
    }
}

?>

</body>
</html>