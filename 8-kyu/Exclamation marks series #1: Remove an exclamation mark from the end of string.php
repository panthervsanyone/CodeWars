<?php

/*
 * Description:
Remove an exclamation mark from the end of a string. For a beginner kata,
you can assume that the input data is always a string, no need to verify it.

Examples
remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi!!"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi! Hi"
remove("Hi") === "Hi"
Note
Please don't post issue about difficulty or duplicate.
 */

function remove(string $s) {
    $arr = str_split($s);
    if ($arr[count($arr)-1] == '!') {
        array_pop($arr);
        return implode($arr);
    } return $s;
}