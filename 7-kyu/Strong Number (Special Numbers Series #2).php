<?php

/*
 * Definition
Strong number is the number that the sum of the factorial of its digits is equal to number itself.

For example, 145 is strong, since 1! + 4! + 5! = 1 + 24 + 120 = 145.

Task
Given a number, Find if it is Strong or not and return either "STRONG!!!!" or "Not Strong !!".

Notes
Number passed is always Positive.
Return the result as String

 */
function strong($n): string
{
    $split = str_split($n);
    $sum = 0;
    foreach($split as $val) {
        $factorial = 1;
        for($i = $val; $i >= 1; $i--){
            $factorial = $factorial * $i;
        }
        $sum += $factorial;
    }
    if ($sum === $n) {
        return 'STRONG!!!!';
    } else  return 'Not Strong !!';
}