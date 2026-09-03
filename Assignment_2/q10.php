<!DOCTYPE html>
<html>
<head>
    <title>Question 10</title>
</head>
<body>

<h2>Left Rotate Array</h2>

<form method="post">

    Enter 4 Numbers:
    <input type="text" name="numbers"
           placeholder="10,20,30,40" required>

    <br><br>

    <input type="submit" name="submit" value="Rotate">

</form>

<?php

function leftRotate($array)
{
    return [
        $array[1],
        $array[2],
        $array[3],
        $array[0]
    ];
}

if (isset($_POST['submit'])) {

    $input = $_POST['numbers'];

    $array = array_map(
        'intval',
        preg_split('/[\s,]+/', trim($input))
    );

    if (count($array) == 4) {

        $newArray = leftRotate($array);

        echo "<h3>Original Array:</h3>";
        echo implode(", ", $array);

        echo "<h3>After Left Rotation:</h3>";
        echo implode(", ", $newArray);

    } else {

        echo "<h3>Please enter exactly 4 numbers.</h3>";
    }
}

?>

</body>
</html>
