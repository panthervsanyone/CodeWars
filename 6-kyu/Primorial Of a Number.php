<?php

/*
 * Definition (Primorial Of a Number)
Is similar to factorial of a number, In primorial, not all the natural numbers get multiplied, only prime numbers are
multiplied to calculate the primorial of a number.
It's denoted with P# and it is the product of the first n prime numbers.

Task
Given a number N , calculate its primorial.!alt!alt

Notes
Only positive numbers will be passed (N > 0) .
 */
function numPrimorial($n) {
    $count = 0;
    $num = 2;
    $result = [];
    while ($count < $n) {
        $div_count = 0;
        for ($i = 1; $i <= $num; $i++) {
            if (($num % $i) == 0) {
                $div_count++;
            }
        }
        if ($div_count < 3) {
            $result [] = $num;
            $count = $count + 1;
        }
        $num = $num + 1;
    }
    return array_product($result);
}