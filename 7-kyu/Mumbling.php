<?php

/*
 * This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.
 */

function accum($s) {
    $strToLower = strtolower($s);
    $arr = str_split($strToLower);
    $newArr = [];
    foreach ($arr as $key => $val) {
        $newArr[] = ucfirst(str_repeat($val, $key+1));
    }
    return implode('-', $newArr);
}