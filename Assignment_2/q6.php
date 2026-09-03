<!DOCTYPE html>
<html>
<head>
    <title>Question 6</title>
</head>
<body>

<h2>Search Number in Array</h2>

<form method="post">

    Enter Array Elements:
    <input type="text" name="numbers"
           placeholder="10,20,30,40,50" required>

    <br><br>

    Enter Number to Search:
    <input type="number" name="search" required>

    <br><br>

    <input type="submit" name="submit" value="Search">

</form>

<?php

function checkNumber($array, $number)
{
    return in_array($number, $array);
}

if (isset($_POST['submit'])) {

    $input = $_POST['numbers'];
    $search = (int)$_POST['search'];

    $array = array_map('intval', preg_split('/[\s,]+/', trim($input)));

    $result = checkNumber($array, $search);

    echo "<h3>Result: " . ($result ? "Number is present" : "Number is not present") . "</h3>";
}

?>

</body>
</html>
