<?php

/*
 * DESCRIPTION:
Given a set of numbers, return the additive inverse of each.
Each positive becomes negatives, and the negatives become positives.

invert([1,2,3,4,5]) == [-1,-2,-3,-4,-5]
invert([1,-2,3,-4,5]) == [-1,2,-3,4,-5]
invert([]) == []
You can assume that all values are integers. Do not mutate the input array/list.
 */

function invert(array $a): array {
    $newArr = [];
    foreach($a as $val){
        if($val > 0){
            $newArr []= $val * -1;
        } else $newArr []= $val * -1;
    }
    return $newArr;
}