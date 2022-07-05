<?php
/*
 * Your task in this kata is to implement a function that calculates the sum of the integers inside a string.
 * For example, in the string "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 363
 * Note: only positive integers will be tested.
 */

function sum_of_integers_in_string(string $s): int {
    $regex = preg_match_all('!\d+!', $s, $matches);
    $oneDimensionalArray = call_user_func_array('array_merge', $matches);
    return array_sum($oneDimensionalArray);
}