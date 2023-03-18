<?php
// If
function testNumbersIf($inputNumber): string
{
    if ($inputNumber > 30) {
         return "More than 30";
    } elseif ($inputNumber <= 30 && $inputNumber > 20) {
         return "More than 20";
    } elseif ($inputNumber <= 20 && $inputNumber > 10) {
         return "More than 10";
    } else {
         return "Equal or less than 10";
    }
}

// Switch
function testNumbersSwitch($inputNumber): string
{
    switch ($inputNumber) {
        case $inputNumber > 30:
             return "More than 30";
         case $inputNumber <= 30 && $inputNumber > 20:
             return "More than 20";
        case $inputNumber <= 20 && $inputNumber > 10:
             return "More than 10";
        default:
             return "Equal or less than 10";
    }
}

//Ternary
function testNumbersTernary($inputNumber): string
{
    return
            $inputNumber > 30 ? "More than 30"
                : (
                        $inputNumber > 20 && $inputNumber <= 30 ? "More than 20"
                            : (
                                    $inputNumber > 10 && $inputNumber <= 20 ? "More than 10" : "Equal or less than 10"
                              )
                 );
}


