<?php
/*
DESCRIPTION:
Given a variable n,

If n is an integer, Return a string with dash'-'marks before and after each odd integer,
but do not begin or end the string with a dash mark. If n is negative, then the negative sign should be removed.

If n is not an integer, return an empty value.
*/


function dashatize(int $num)
{
    $numb = abs($num);
    $split = str_split($numb);
    $resultStr = '';
    foreach ($split as $key => $val) {
        if ((int)$val % 2 == 0) {
            $resultStr .= $val;
        } elseif ((int)$val % 2 != 0) {

            $resultStr .= '-' . $val . '-';
        }
    }
    $removeDoubleDash = str_replace('--', '-', $resultStr);
    if ($removeDoubleDash[0] == '-')
        $removeDoubleDash = substr($removeDoubleDash, 1);
    if ($removeDoubleDash[strlen($removeDoubleDash) - 1] == '-')
        $removeDoubleDash = substr($removeDoubleDash, 0, -1);
    return $removeDoubleDash;
}