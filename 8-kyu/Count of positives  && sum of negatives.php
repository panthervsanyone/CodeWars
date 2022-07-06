<?php

/*
 * Write a function which calculates the average of the numbers in a given list.

Note: Empty arrays should return 0.
 */

function find_average($array) {
    if(empty($array)){
        return 0;
    } else return array_sum($array) / count($array);
}