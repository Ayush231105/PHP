<!DOCTYPE html>
<html>
<head>
    <title>Question 4</title>
</head>
<body>

<h2>Convert Last 3 Characters to Uppercase</h2>

<form method="post">
    Enter String:
    <input type="text" name="text" required>

    <br><br>

    <input type="submit" name="submit" value="Convert">
</form>

<?php

function convertLastThree($str)
{
    $length = strlen($str);

    if ($length < 3) {
        return strtoupper($str);
    }

    return substr($str, 0, $length - 3) .
           strtoupper(substr($str, -3));
}

if (isset($_POST['submit'])) {

    $text = $_POST['text'];

    echo "<h3>Result: " . htmlspecialchars(convertLastThree($text)) . "</h3>";
}

?>

</body>
</html>