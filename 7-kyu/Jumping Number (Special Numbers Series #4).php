<?php

/*
 * Definition
Jumping number is the number that All adjacent digits in it differ by 1.

Task
Given a number, Find if it is Jumping or not .

Notes
Number passed is always Positive .

Return the result as String .

The difference between ‘9’ and ‘0’ is not considered as 1 .

All single digit numbers are considered as Jumping numbers.


 */

function jumpingNumber($n): string
{
    $split = str_split($n);
    $limit = count($split);
    if ($limit == 1) {
        return "Jumping!!";
    }
    for ($i = 0; $i < $limit - 1; $i++) {
        if ($split[$i] + 1 == $split[$i + 1] || $split[$i] - 1 == $split[$i + 1]) {
            continue;
        } else return "Not!!";
    }
    return "Jumping!!";
}
