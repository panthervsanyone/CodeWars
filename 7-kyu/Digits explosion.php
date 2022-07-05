<?php
/*
 * DESCRIPTION:
Given a string made of digits [0-9], return a string where each digit is repeated a number of times equals to its value.

Examples
explode("312")
should return :

"333122"
explode("102269")
should return :

"12222666666999999999"
 */

function digits_explode(string $s): string {
    $split = str_split($s);
    $result = '';
    foreach($split as $letter){
        $result .= str_repeat($letter,(int)$letter);
    }
    return $result;
}