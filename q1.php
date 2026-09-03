<!DOCTYPE html>
<html>
<head>
    <title>Question 1</title>
</head>
<body>

<h2>Check Numbers Between 20 and 50</h2>

<form method="post">
    Enter Number 1:
    <input type="number" name="num1" required><br><br>

    Enter Number 2:
    <input type="number" name="num2" required><br><br>

    Enter Number 3:
    <input type="number" name="num3" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php

function hasValueInRange(int ...$numbers): bool
{
    foreach ($numbers as $num) {
        if ($num >= 20 && $num <= 50) {
            return true;
        }
    }

    return false;
}

if (isset($_POST['submit'])) {

    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $num3 = (int)$_POST['num3'];

    $result = hasValueInRange($num1, $num2, $num3);

     if ($result) {
            echo "<h3>Result: TRUE</h3>";
            echo "<p>At least one number is between 20 and 50.</p>";
        } else {
            echo "<h3>Result: FALSE</h3>";
            echo "<p>No number is between 20 and 50.</p>";
        }
}

?>

</body>
</html>