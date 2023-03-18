<?php
function recursion($a, $b)
{
    if ($a < $b) {
        echo $a;
        $a++;
        recursion($a, $b);
    } elseif ($a > $b) {
        echo $a;
        $a--;
        recursion($a, $b);
    } else {
        echo $b;
    }
}

recursion(4, 4);