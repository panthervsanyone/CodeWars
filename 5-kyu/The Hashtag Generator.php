<?php

/*
 * The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

It must start with a hashtag (#).
All words must have their first letter capitalized.
If the final result is longer than 140 chars it must return false.
If the input or the result is an empty string it must return false.
Examples
" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false

 */

function generateHashtag($str)
{
    $str = trim($str);
    $result = '';
    $strExp = explode(' ', $str);
    $arrUcFirst = [];
    foreach ($strExp as $val) {
        $arrUcFirst[] = ucfirst($val);
    }
    $result .= implode('', $arrUcFirst);
    if (strlen('#' . $result) > 140 || strlen($result) == 0) {
        return false;
    } else {
        return '#' . $result;
    }
}