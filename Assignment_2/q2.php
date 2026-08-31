<?php
function nearestToHundred($a, $b) {
    if ($a == $b) {
        return 0;
    }

    $diffA = abs(100 - $a);
    $diffB = abs(100 - $b);

    if ($diffA < $diffB) {
        return $a;
    } elseif ($diffB < $diffA) {
        return $b;
    } else {
        return $a; 
    }
}
$num1 = 95;
$num2 = 95;
$result = nearestToHundred($num1, $num2);
echo "The nearest number to 100 is: $result";
?>
