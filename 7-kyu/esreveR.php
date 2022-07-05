<?php
/*
 * DESCRIPTION:
Write a function reverse which reverses a list (or in clojure's case, any list-like data structure)

(the dedicated builtin(s) functionalities are deactivated)
 */
function reverse(array $a): array
{
    $countValue = count($a);
    $result = [];
    for ($i = $countValue - 1; $i >= 0; $i--) {
        $result [] = $a[$i];
    }
    return $result;
}