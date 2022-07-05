<?php

/*
 * DESCRIPTION:
Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (a, e, i, o, u).

If they are, change the array value to a string of that vowel.

Return the resulting array.


 */

function isVow(array $a)
{
    $newArr = [];
    $arr = [
        97 => 'a',
        101 => 'e',
        105 => 'i',
        111 => 'o',
        117 => 'u'
    ];
    foreach ($a as $value) {
        if (array_key_exists($value, $arr)) {
            $newArr [] = $arr[$value];
        } else $newArr [] = $value;
    }
    return $newArr;
}
