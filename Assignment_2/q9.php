<!DOCTYPE html>
<html>
<head>
    <title>Question 9</title>
</head>
<body>

<h2>Create Long + Short + Long String</h2>

<form method="post">

    Enter First String:
    <input type="text" name="str1" required>

    <br><br>

    Enter Second String:
    <input type="text" name="str2" required>

    <br><br>

    <input type="submit" name="submit" value="Create">

</form>

<?php

function createString($str1, $str2)
{
    if (strlen($str1) > strlen($str2)) {
        $long = $str1;
        $short = $str2;
    } else {
        $long = $str2;
        $short = $str1;
    }

    return $long . $short . $long;
}

if (isset($_POST['submit'])) {

    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];

    echo "<h3>Result: " .
         htmlspecialchars(createString($str1, $str2)) .
         "</h3>";
}

?>

</body>
</html>
