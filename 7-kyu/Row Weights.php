<?php

/*
 * DESCRIPTION:
Scenario
Several people are standing in a row divided into two teams.
The first person goes into team 1, the second goes into team 2, the third goes into team 1, and so on.

Task
Given an array of positive integers (the weights of the people), return a new array/tuple of two integers,
where the first one is the total weight of team 1, and the second one is the total weight of team 2.

Notes
Array size is at least 1.
All numbers will be positive.
 */

function rowWeights($arr) {
    $evenSum = 0;
    $odSum = 0;
    foreach($arr as $key => $val){
        $key % 2 != 0 ? $odSum += $val : $evenSum += $val;
    } return [$evenSum, $odSum];
}