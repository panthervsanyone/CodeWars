<?php
//Split Strings
//Complete the solution so that it splits the string into pairs
// of two characters. If the string contains an odd number of
// characters then it should replace the missing second character of the final pair with an underscore ('_').
//
//Examples:
//
//* 'abc' =>  ['ab', 'c_']
//* 'abcdef' => ['ab', 'cd', 'ef']
function solution($str)
{
    $length = strlen($str);
    if ($length < 1) {
        return [];
    }
    if ($length % 2 !== 0) {
        $str .= '_';
    }
    $split = str_split($str, 2);
    return $split;
}

print_r(solution(""));