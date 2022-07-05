<?php

/*
 * DESCRIPTION:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).

Note: If the number is a multiple of both 3 and 5, only count it once.

Courtesy of projecteuler.net (Problem 1)
 */

function solution($number)
{
    if ($number <= 0)
        return 0;
    $ran = range(1, $number - 1);
    $sum = 0;
    foreach ($ran as $val) {
        if ($val % 3 == 0 || $val % 5 == 0) {
            $sum += $val;
        }
    }
    return $sum;
}

function solution($number)
{
    $list = [];
    for ($i = 1; $i < $number; $i++) {
        foreach ([3, 5] as $d) {
            if (0 == $i % $d) {
                $list[] = $i;
                break;
            }
        }
    }
    return array_sum($list);
}