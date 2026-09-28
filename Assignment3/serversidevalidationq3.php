<?php

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";
$password = "";
$confirm_password = "";

$usernameError = "";
$emailError = "";
$genderError = "";
$mobileError = "";
$countryError = "";
$passwordError = "";
$confirmPasswordError = "";

$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Username
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
        $valid = false;
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $_POST["username"])) {
        $usernameError = "Only letters, numbers and spaces are allowed";
        $valid = false;
    } else {
        $username = $_POST["username"];
    }

    // Email
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
        $valid = false;
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
        $valid = false;
    } else {
        $email = $_POST["email"];
    }

    // Gender
    if (empty($_POST["gender"])) {
        $genderError = "Gender must be selected";
        $valid = false;
    } else {
        $gender = $_POST["gender"];
    }

    // Mobile
    if (empty($_POST["mobile"])) {
        $mobileError = "Mobile number is required";
        $valid = false;
    } elseif (!preg_match("/^\+?[0-9]+$/", $_POST["mobile"])) {
        $mobileError = "Only numbers and + symbol are allowed";
        $valid = false;
    } else {
        $mobile = $_POST["mobile"];
    }

    // Country
    if (empty($_POST["country"])) {
        $countryError = "Country must be selected";
        $valid = false;
    } else {
        $country = $_POST["country"];
    }

    // Password
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
        $valid = false;
    } elseif (strlen($_POST["password"]) < 8) {
        $passwordError = "Password must be at least 8 characters";
        $valid = false;
    } else {
        $password = $_POST["password"];
    }

    // Confirm Password
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordError = "Confirm password is required";
        $valid = false;
    } elseif ($_POST["password"] != $_POST["confirm_password"]) {
        $confirmPasswordError = "Passwords do not match";
        $valid = false;
    } else {
        $confirm_password = $_POST["confirm_password"];
    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Form</title>

    <style>

        body {
            font-family: Arial;
            margin: 40px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .error {
            color: red;
            margin-left: 10px;
        }

        .success {
            color: green;
            font-size: 20px;
        }

        .output {
            background-color: #f2f2f2;
            padding: 20px;
            width: 400px;
            margin-top: 20px;
        }

    </style>

</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="">

    <!-- Username -->
    <div class="form-group">

        <label>Username:</label>

        <input type="text"
               name="username"
               value="<?php echo htmlspecialchars($username); ?>">

        <?php
        if ($usernameError != "") {
            echo '<span class="error">* ' . $usernameError . '</span>';
        }
        ?>

    </div>


    <!-- Email -->
    <div class="form-group">

        <label>Email:</label>

        <input type="text"
               name="email"
               value="<?php echo htmlspecialchars($email); ?>">

        <?php
        if ($emailError != "") {
            echo '<span class="error">* ' . $emailError . '</span>';
        }
        ?>

    </div>


    <!-- Gender -->
    <div class="form-group">

        <label>Gender:</label>

        <input type="radio"
               name="gender"
               value="m"
               <?php if ($gender == "m") echo "checked"; ?>>
        Male

        <input type="radio"
               name="gender"
               value="f"
               <?php if ($gender == "f") echo "checked"; ?>>
        Female

        <input type="radio"
               name="gender"
               value="o"
               <?php if ($gender == "o") echo "checked"; ?>>
        Other

        <?php
        if ($genderError != "") {
            echo '<span class="error">* ' . $genderError . '</span>';
        }
        ?>

    </div>


    <!-- Mobile -->
    <div class="form-group">

        <label>Mobile No:</label>

        <input type="text"
               name="mobile"
               value="<?php echo htmlspecialchars($mobile); ?>">

        <?php
        if ($mobileError != "") {
            echo '<span class="error">* ' . $mobileError . '</span>';
        }
        ?>

    </div>


    <!-- Country -->
    <div class="form-group">

        <label>Country:</label>

        <select name="country">

            <option value="">--Select Country--</option>

            <option value="India"
                <?php if ($country == "India") echo "selected"; ?>>
                India
            </option>

            <option value="USA"
                <?php if ($country == "USA") echo "selected"; ?>>
                USA
            </option>

            <option value="UK"
                <?php if ($country == "UK") echo "selected"; ?>>
                UK
            </option>

            <option value="Canada"
                <?php if ($country == "Canada") echo "selected"; ?>>
                Canada
            </option>

            <option value="Australia"
                <?php if ($country == "Australia") echo "selected"; ?>>
                Australia
            </option>

        </select>

        <?php
        if ($countryError != "") {
            echo '<span class="error">* ' . $countryError . '</span>';
        }
        ?>

    </div>


    <!-- Password -->
    <div class="form-group">

        <label>Password:</label>

        <input type="password" name="password">

        <?php
        if ($passwordError != "") {
            echo '<span class="error">* ' . $passwordError . '</span>';
        }
        ?>

    </div>


    <!-- Confirm Password -->
    <div class="form-group">

        <label>Confirm Password:</label>

        <input type="password" name="confirm_password">

        <?php
        if ($confirmPasswordError != "") {
            echo '<span class="error">* ' . $confirmPasswordError . '</span>';
        }
        ?>

    </div>


    <!-- Terms -->
    <div class="form-group">

        <input type="checkbox"
               name="terms"
               value="yes">

        I agree to the terms and condition

    </div>


    <input type="submit" value="Register">

</form>


<?php

// Print data only when all validations are successful

if ($_SERVER["REQUEST_METHOD"] == "POST" && $valid == true) {

    echo '<div class="output">';

    echo '<h2 class="success">Registration Successful!</h2>';

    echo "<h3>Submitted Data</h3>";

    echo "Username: " . htmlspecialchars($username) . "<br><br>";

    echo "Email: " . htmlspecialchars($email) . "<br><br>";

    echo "Gender: " . htmlspecialchars($gender) . "<br><br>";

    echo "Mobile No: " . htmlspecialchars($mobile) . "<br><br>";

    echo "Country: " . htmlspecialchars($country) . "<br><br>";

    echo "Password: " . htmlspecialchars($password) . "<br><br>";

    echo "Confirm Password: " . htmlspecialchars($confirm_password) . "<br><br>";

    if (isset($_POST["terms"])) {
        echo "Terms & Conditions: Accepted";
    } else {
        echo "Terms & Conditions: Not Accepted";
    }

    echo '</div>';
}

?>

</body>

</html>
