<?php
/*
 * DESCRIPTION:
Definition
A number is called Automorphic number if and only if its square ends in the same digits as the number itself.

Task
Given a number determine if it Automorphic or not .


 */
function automorphic($n): string
{
    $powNumber = $n ** 2;
    $len = strlen($n);
    $checkValue = substr($powNumber, -$len);
    if ($n == $checkValue) {
        return "Automorphic";
    }
    return "Not!!";
}