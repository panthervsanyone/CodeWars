<?php

/*
 * Consider the word "abode". We can see that the letter a is in position 1 and b is in position 2.
 * In the alphabet, a and b are also in positions 1 and 2. Notice also that d and e in abode occupy the positions
 *  they would occupy in the alphabet, which are positions 4 and 5.

Given an array of words, return an array of the number of letters that occupy
their positions in the alphabet for each word. For example,

solve(["abode","ABc","xyzD"]) = [4, 3, 1]
See test cases for more examples.

Input will consist of alphabet characters, both uppercase and lowercase. No spaces.

Good luck!

If you like this Kata, please try:
 */

function solve($arr):array
{
    $alphabet = range('a', 'z');
    $arrResults = [];
    foreach ($arr as $value) {
        $valueLetter = str_split(strtolower($value));
        $positiveResult = 0;
        foreach ($valueLetter as $key => $letter) {
            if (array_search($letter, $alphabet) == $key) {
                $positiveResult++;
            }
            if (strlen($value) == $key + 1) {
                $arrResults []= $positiveResult;
            }
        }
    }
    return $arrResults;
}

print_r(solve(["abode", "ABc", "xyzD"]));