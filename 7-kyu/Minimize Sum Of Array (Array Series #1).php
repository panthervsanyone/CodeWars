<?php

/*
 * DESCRIPTION:
Introduction and Warm-up (Highly recommended)
Playing With Lists/Arrays Series
Task
Given an array of integers , Find the minimum sum which is obtained from summing each Two integers product .

Notes
Array/list will contain positives only .
Array/list will always have even size
 */

function minSum($arr) {
    $sumArr = 0;
    sort($arr);
    foreach ($arr as $value) {
        $sumArr += array_pop($arr) * array_shift($arr);
    }
    return $sumArr;
}