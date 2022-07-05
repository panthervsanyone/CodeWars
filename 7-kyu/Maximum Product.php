<?php

/*
 * DESCRIPTION:
Task
Given an array of integers , Find the maximum product obtained from multiplying 2 adjacent numbers in the array.

Notes
Array/list size is at least 2.

Array/list numbers could be a mixture of positives, negatives also zeroes .
 */

function adjacentElementsProduct($array) {
    $newArr = [];
    $keyCounter = 0;
    $count = count($array);
    for ($i = 0; $i < $count-1; $i++){
        $newArr []= $array[$keyCounter] * $array[++$keyCounter];
    }
    return max($newArr);
}