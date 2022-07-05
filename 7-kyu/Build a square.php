<?php
/*
DESCRIPTION:
I will give you an integer. Give me back a shape that is as long and wide as the integer.
The integer will be a whole number between 1 and 50.

Example
n = 3, so I expect a 3x3 square back just like below as a string:

+++
+++
+++
*/

function generateShape($int): string
{
    return trim(str_repeat(str_repeat('+', $int) . "\n", $int));
}


function generateShape($int) {
    $square = "";
    for ($i = 0; $i < $int; $i++) {
        $square .= str_repeat('+', $int). "\n";
    }
    return trim($square);
}

function generateShape($int) {
    $square = str_repeat('+', $int);
    for ($i = 0; $i < $int-1; $i++) {
        $square .= "\n".str_repeat('+', $int);
    }
    return $square;
}