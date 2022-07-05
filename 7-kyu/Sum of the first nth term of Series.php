<?php

/*
 * DESCRIPTION:
Task:
Your task is to write a function which returns the sum of following series upto nth term(parameter).

Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
Rules:
You need to round the answer to 2 decimal places and return it as String.

If the given value is 0 then it should return 0.00

You will only be given Natural Numbers as arguments.

Examples:(Input --> Output)
1 --> 1 --> "1.00"
2 --> 1 + 1/4 --> "1.25"
5 --> 1 + 1/4 + 1/7 + 1/10 + 1/13 --> "1.57"
 */

function series_sum($n) {

    if ($n == 0){
        return '0.00';
    } elseif ($n == 1) {
        return '1.00';
    }

    $num = 1;
    for ($i = 1, $d = 4; $i < $n; $i++, $d+=3) {
        $divide = 1 / $d;
        $num += $divide;
    }
    return (string)number_format(round($num,2), 2);
}