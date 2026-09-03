<!DOCTYPE html>
<html>
<head>
    <title>Question 5</title>
</head>
<body>

<h2>Count "aa" in a String</h2>

<form method="post">
    Enter String:
    <input type="text" name="text" required>

    <br><br>

    <input type="submit" name="submit" value="Count">
</form>

<?php

function countAA($str)
{
    $count = 0;
    $length = strlen($str);

    for ($i = 0; $i < $length - 1; $i++) {

        if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
            $count++;
        }
    }

    return $count;
}

if (isset($_POST['submit'])) {

    $text = $_POST['text'];

    echo "<h3>Number of 'aa': " . countAA($text) . "</h3>";
}

?>

</body>
</html>
