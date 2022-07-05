<?php

/*
 * DESCRIPTION:
Reverse every other word in a given string, then return the string. Throw away any leading or trailing whitespace,
while ensuring there is exactly one space between each word. Punctuation marks should be treated as
if they are a part of the word in this kata.
 */

function reverse($str):string
{
    if($str == ''){
        return "";
    }
    $splitStr = explode(' ', trim($str));
    $result = [];
    foreach ($splitStr as $key => $value) {
        if ($key % 2 != 0) {
            $result [] = strrev($value);
        } else {
            $result [] = $value;
        }
    }
    return implode(' ', $result);
}