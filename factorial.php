<?php

// factorial: 3 => 3*2*1 = 6

function factorial($num) {
    if ($num == 1) {
        return $num;
    }
    else {
        return ($num * factorial($num-1));
    }
}

$result = factorial(3);

echo $result;

?>