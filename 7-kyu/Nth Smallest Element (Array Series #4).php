<?php

/*
 * Task
Given an array/list [] of integers , Find the Nth smallest element in this array of integers

Notes
Array/list size is at least 3 .

Array/list's numbers could be a mixture of positives , negatives and zeros .

Repetition in array/list's numbers could occur , so don't Remove Duplications .

Input >> Output Examples
nthSmallest({3,1,2} ,2) ==> return (2)
 */

function NthSmallest($arr, $pos)
{
    sort($arr);
    foreach ($arr as $key => $val) {
        if($key+1 == $pos)
            return $val;
    }
}