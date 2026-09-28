<?php

include "connectq5.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data

    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];

    // Insert data into database

    $sql = "INSERT INTO registration
            (username, email, gender, mobile, country, password)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $username,
        $email,
        $gender,
        $mobile,
        $country,
        $password
    );

    // Check whether data was inserted

    if ($stmt->execute()) {

        header("Location: loginq5.html");
        exit();

    } else {

        header("Location: registrationq5.html");
        exit();

    }

    $stmt->close();
    $conn->close();

}

?>
