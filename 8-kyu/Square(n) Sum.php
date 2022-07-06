<?php

/*
 * Complete the square sum function so that it squares each number passed into it and then sums the results together.

For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
 */

function square_sum($numbers) : int {
    $arrSum = [];
    foreach ($numbers as $pow){
        $arrSum[] = pow($pow, 2);
    }
    return array_sum($arrSum);
}