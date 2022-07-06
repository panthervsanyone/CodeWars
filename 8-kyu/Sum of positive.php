<?php

/*
 * You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0.
 */

function positive_sum($arr) {
    $positiveVal = 0;
    foreach ($arr as $val){
        if ($val >= 0)
            $positiveVal += $val;
    }
    return $positiveVal;
}