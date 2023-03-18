<?php
function changeArrayPos($arr, $position):array
{
    unset($arr[$position]);
    array_multisort($arr);
    return $arr;
}

var_dump(changeArrayPos([1, 2, 3, 4, 5], 3));