<?php

/*
 * Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]


 */

function maps($x)
{
    $arr = [];
    foreach ($x as $val){
        $arr[] = $val * 2;
    }
    return $arr;
}