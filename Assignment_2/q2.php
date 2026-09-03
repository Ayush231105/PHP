<!DOCTYPE html>
<html>
<head>
    <title>Question 2</title>
</head>
<body>

<h2>Find Number Nearest to 100</h2>

<form method="post">
    Enter Number 1:
    <input type="number" name="num1" required><br><br>

    Enter Number 2:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php

function nearestTo100(int $a, int $b): int
{
    $diff1 = abs(100 - $a);
    $diff2 = abs(100 - $b);

    if ($diff1 == $diff2) {
        return 0;
    }

    return ($diff1 < $diff2) ? $a : $b;
}

if (isset($_POST['submit'])) {

    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];

    echo "<h3>Result: " . nearestTo100($num1, $num2) . "</h3>";
}

?>

</body>
</html>
