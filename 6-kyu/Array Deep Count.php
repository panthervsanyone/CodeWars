<?php

/*
 * count() will give you the number of top-level elements in an array if exactly one argument
 *  $a is passed in which is the array.

Your task is to create a function deepCount that returns the number of ALL elements
 within an array, including any within inner-level arrays.

For example:

deep_c([1, 2, 3]);
//>>>>> 3
deep_c(["x", "y", ["z"]]);
//>>>>> 4
deep_c([1, 2, [3, 4, [5]]]);
//>>>>> 7
The input will always be an array.

In PHP you may not assume that the array passed in will be non-associative.

Please note that count(), eval() and COUNT_RECURSIVE are disallowed -
you should be able to implement the logic for deep_c() yourself ;)
 */

function deep_c(array $a): int
{
    $i = 0;
    foreach ($a as $k) {
        $i++;
        if (is_array($k)) {
            $i += deep_c($k);
        }
    }
    return $i;
}
