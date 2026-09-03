<!DOCTYPE html>
<html>
<head>
    <title>Question 7</title>
</head>
<body>

<h2>Fizz Buzz String</h2>

<form method="post">

    Enter String:
    <input type="text" name="text" required>

    <br><br>

    <input type="submit" name="submit" value="Check">

</form>

<?php

function fizzBuzz($str)
{
    $startsWithF = (strlen($str) > 0 && $str[0] == 'F');
    $endsWithB = (strlen($str) > 0 && substr($str, -1) == 'B');

    if ($startsWithF && $endsWithB) {
        return "FizzBuzz";
    }

    if ($startsWithF) {
        return "Fizz";
    }

    if ($endsWithB) {
        return "Buzz";
    }

    return $str;
}

if (isset($_POST['submit'])) {

    $text = $_POST['text'];

    echo "<h3>Result: " . htmlspecialchars(fizzBuzz($text)) . "</h3>";
}

?>

</body>
</html>