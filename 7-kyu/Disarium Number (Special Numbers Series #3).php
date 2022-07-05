<?php

/*
 * DESCRIPTION:
Definition
Disarium number is the number that The sum of its digits powered with their respective
positions is equal to the number itself.

Task
Given a number, Find if it is Disarium or not .

Warm-up (Highly recommended)
Playing With Numbers Series
Notes
Number passed is always Positive .
Return the result as String
 */

function disariumNumber($n): string {
    $split = str_split($n);
    $result = 0;
    foreach($split as $key => $value) {
        $result += $value ** ($key+1);
    }
    return $result === $n ? 'Disarium !!' : 'Not !!';
}
