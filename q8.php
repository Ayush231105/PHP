<!DOCTYPE html>
<html>
<head>
    <title>Question 8</title>
</head>
<body>

<h2>Insert String in Middle</h2>

<form method="post">

    Enter 4 Character String:
    <input type="text" name="str1" maxlength="4" required>

    <br><br>

    Enter String to Insert:
    <input type="text" name="str2" required>

    <br><br>

    <input type="submit" name="submit" value="Insert">

</form>

<?php

function insertMiddle($str1, $str2)
{
    $middle = strlen($str1) / 2;

    return substr($str1, 0, $middle) .
           $str2 .
           substr($str1, $middle);
}

if (isset($_POST['submit'])) {

    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];

    if (strlen($str1) == 4) {

        echo "<h3>Result: " .
             htmlspecialchars(insertMiddle($str1, $str2)) .
             "</h3>";

    } else {

        echo "<h3>Please enter exactly 4 characters.</h3>";
    }
}

?>

</body>
</html>