<?php

/*
 * It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string.
 *  You're given one parameter, the original string. You don't have to worry with strings with less than two characters.


 */

function remove_char(string $s): string {
    $split = str_split($s);
    array_shift($split);
    array_pop($split);
    return implode('',$split);
}