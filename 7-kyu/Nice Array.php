<?php
/*
 *A Nice array is defined to be an array where for every value n in the array, there is
 * also an element n - 1 or n + 1 in the array.
 *
 * Write a function named isNice/IsNice that returns true if its array argument is a Nice array, else false.
 * An empty array is not considered nice.
 */

function isNice($arr):bool
{
    if (count($arr) < 1)
        return false;

    foreach ($arr as $value) {
        $valuePlus = $value + 1;
        $valueMinus = $value - 1;
        if (in_array($valuePlus, $arr) || in_array($valueMinus, $arr)) {
            continue;
        } else return false;
    }
    return true;
}