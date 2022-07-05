<?php

/*
 * DESCRIPTION:
Challenge:

Given a two-dimensional array of integers, return the flattened
 version of the array with all the integers in the sorted (ascending) order.

Example:

Given [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], your function should return [1, 2, 3, 4, 5, 6, 7, 8, 9].


 */

function flatten_and_sort($array)
{
    $arr = [];
    foreach ($array as $val) {
        if (!empty($val)) {
            foreach ($val as $res){
                $arr []= $res;
            }
        } continue;
    }
    sort($arr);
    return $arr;
}