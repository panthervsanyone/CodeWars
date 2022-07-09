<?php
/*
 * Given a string, return a new string that has transformed based on the input:

Change case of every character, ie. lower case to upper case, upper case to lower case.
Reverse the order of words from the input.
Note: You will have to handle multiple spaces, and leading/trailing spaces.

For example:

"Example Input" ==> "iNPUT eXAMPLE"
 */

function string_transformer(string $s): string {
    $arrRev = array_reverse(explode(' ', $s));
    $result = '';
    foreach($arrRev as $value) {
        $splitEveryValue = str_split($value);
        $counterLen = 0;
        $length = strlen($value);
        foreach($splitEveryValue as $letter) {
            ctype_upper($letter) ? $result.= strtolower($letter) : $result.= strtoupper($letter);
            $counterLen++;
            if ($counterLen >= $length)
                $result .= ' ';
        }
    }
    return substr($result, 0, -1);
}

echo string_transformer('You Know When  THAT  Hotline  Bling');