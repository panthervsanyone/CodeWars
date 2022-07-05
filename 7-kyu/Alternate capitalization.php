<?php

/*
 * DESCRIPTION:
Given a string, capitalize the letters that occupy even indexes and odd indexes separately,
and return as shown below. Index 0 will be considered even.

For example, capitalize("abcdef") = ['AbCdEf', 'aBcDeF']. See test cases for more examples.

The input will be a lowercase string with no spaces.

Good luck!
 */

function capitalize($s) {
    $split = str_split($s);
    $even = '';
    $odd = '';
    $result = [];
    foreach($split as $key => $value) {
        $key % 2 ? $even .= ucfirst($value) : $even .= $value;
        $key % 2 ? $odd .= $value : $odd .= ucfirst($value);
    }
    return $result = [$odd, $even];
}