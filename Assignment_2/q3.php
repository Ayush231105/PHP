<!DOCTYPE html>
<html>
<head>
    <title>Question 3</title>
</head>
<body>

<h2>Check Number Ranges</h2>

<form method="post">
    Enter Number 1:
    <input type="number" name="num1" required><br><br>

    Enter Number 2:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php

function checkRange(int $a, int $b): bool
{
    if (($a >= 40 && $a <= 50) && ($b >= 40 && $b <= 50)) {
        return true;
    }

    if (($a >= 50 && $a <= 60) && ($b >= 50 && $b <= 60)) {
        return true;
    }

    return false;
}

if (isset($_POST['submit'])) {

    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];

    $result = checkRange($num1, $num2);

    echo "<h3>Result: " . ($result ? "TRUE" : "FALSE") . "</h3>";
}

?>

</body>
</html>
