<?php
/*
 * Given a lowercase string that has alphabetic characters only and no spaces, return the highest value of
 * consonant substrings. Consonants are any letters of the alphabet except "aeiou".

We shall assign the following values: a = 1, b = 2, c = 3, .... z = 26.
 */
function solve($s): int {
    $alphabet = range('a','z');
    $consonant = preg_split('#[aeiou\s]+#i', $s, 0, PREG_SPLIT_NO_EMPTY);
    $maxResult = [];
    foreach ($consonant as $value) {
        $sumEveryWord = 0;
        $split = str_split($value);
        foreach ($split as $key => $letter){
            $sumEveryWord += array_search($letter, $alphabet) + 1;
            if (count($split)-1 == $key ) {
                $maxResult []= $sumEveryWord;
                $sumEveryWord = 0;
            }
        }
    }
    return max($maxResult);
}