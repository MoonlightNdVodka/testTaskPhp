<?php
function counter($input): int
{
    do {
        $arr = str_split($input, 1);
        $newArr = array_sum($arr);
        $checker = str_split($newArr, 1);
        $input = $newArr;
    } while (count($checker) > 1);

    return $newArr;
}

echo counter(10);