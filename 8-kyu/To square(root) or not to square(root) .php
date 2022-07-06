<?php
/*
Write a method, that will get an integer array as parameter and will process every number from this array.

Return a new array with processing every number of the input-array like this:

If the number has an integer square root, take this, otherwise square the number.

Example
[4,3,9,7,2,1] -> [2,9,3,49,4,1]
Notes
The input array will always contain only positive numbers, and will never be empty or null.
*/

function squareOrSquareRoot($arr)
{
    $newArr = [];
    foreach ($arr as $key => $val) {
        $numb = sqrt($val);
        $numb = ($numb - floor($numb));
        if ($numb == 0) {
            $newArr[] = sqrt($val);
        } else $newArr[] = pow($val, 2);
    }
    return $newArr;
}