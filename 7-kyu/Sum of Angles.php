<?php
/*
 * DESCRIPTION:
Find the total sum of internal angles (in degrees) in an n-sided simple polygon. N will be greater than 2.
 */

function angle(int $n): int {
    $result = $n - 2;
    return $result * 180;
}