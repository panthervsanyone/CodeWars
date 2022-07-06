<?php

/*
 * Check to see if a string has the same amount of 'x's and 'o's.
 *  The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false

 */

function XO($s) {
    $countChar = count_chars(strtolower($s), 1);
    if (!array_key_exists(111, $countChar) && !array_key_exists(120, $countChar)){
        return true;
    }
    if ($countChar['111'] === $countChar['120']) {
        return true;
    } return false;
}