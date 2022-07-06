<?php
/*
 * Count the number of divisors of a positive integer n.

Random tests go up to n = 500000.

Examples (input --> output)
4 --> 3 (1, 2, 4)
5 --> 2 (1, 5)
12 --> 6 (1, 2, 3, 4, 6, 12)
30 --> 8 (1, 2, 3, 5, 6, 10, 15, 30)
 */

function divisors($n)
{
    $arrOfDivisors = [];
    for ($i = 1, $count = 0; $i <= $n; $i++) {
        $intDivisors = $n / $i;
        if (is_int($intDivisors)) {
            $count++;
        } else continue;
    }
    return $count;
}