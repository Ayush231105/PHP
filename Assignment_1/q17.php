<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>

<body>

<h2>User Registration</h2>

<form method="post">

    Full Name:
    <input type="text" name="fullname">
    <br><br>

    Date of Birth:
    <input type="date" name="dob">
    <br><br>

    Email ID:
    <input type="text" name="email">
    <br><br>

    Mobile:
    <input type="text" name="mobile">
    <br><br>

    <input type="checkbox" name="terms">
    I agree to the terms and conditions
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php

if (isset($_POST['submit'])) {

    $fullname = trim($_POST['fullname']);
    $dob = $_POST['dob'];
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);

    // Check full name
    $name = explode(" ", $fullname);

    if (count($name) != 2) {
        echo "<p style='color:red;'>Error: Full name must contain two words.</p>";
    }

    // Check date of birth
    elseif (empty($dob)) {
        echo "<p style='color:red;'>Error: Please enter your date of birth.</p>";
    }

    else {
        $birthDate = new DateTime($dob);
        $today = new DateTime();

        $age = $today->diff($birthDate)->y;

        if ($age < 18) {
            echo "<p style='color:red;'>Error: You must be above 18 years old.</p>";
        }

        // Check email
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Error: Please enter a valid email ID.</p>";
        }

        // Check mobile
        elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
            echo "<p style='color:red;'>Error: Mobile number must be exactly 10 digits.</p>";
        }

        // Check terms and conditions
        elseif (!isset($_POST['terms'])) {
            echo "<p style='color:red;'>Error: You must agree to the terms and conditions.</p>";
        }

        // All conditions are satisfied
        else {
            echo "<p style='color:green;'>Successfully Registered</p>";
        }
    }
}

?>

</body>
</html>
