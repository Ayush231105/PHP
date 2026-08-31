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

$values = [55, 95, 60];
var_dump(hasValueInRange(...$values));
?>
