<?php

/*
 * Each exclamation mark's weight is 2; each question mark's weight is 3.
 * Putting two strings left and right on the balance - are they balanced?

If the left side is more heavy, return "Left"; if the right side is more heavy,
 return "Right"; if they are balanced, return "Balance".

Examples
"!!", "??"     -->  "Right"
"!??", "?!!"   -->  "Left"
"!?!!", "?!?"  -->  "Left"
"!!???!????", "??!!?!!!!!!!"  -->  "Balance"
 */

function balance(string $l, string $r):string
{
    $leftValues = array_count_values(str_split($l));
    $rightValues = array_count_values(str_split($r));
    $resultL = 0;
    $resultR = 0;
    foreach ($leftValues as $key => $letter) {
        $key == '?' ? $resultL += $letter * 3 : $resultL += $letter * 2;
    }

    foreach ($rightValues as $key => $letter) {
        $key == '?' ? $resultR += $letter * 3 : $resultR += $letter * 2;
    }
    if ($resultL > $resultR) {
        return 'Left';
    } elseif ($resultL < $resultR) {
        return 'Right';
    } else return 'Balance';
}
