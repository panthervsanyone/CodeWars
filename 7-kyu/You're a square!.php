<?php

function isSquare($n)
{
    if ($n < 0) {
        return false;
    }
    $sqrtNumber = sqrt($n);
    return $sqrtNumber - floor($sqrtNumber) == 0;
}

var_dump(isSquare(4));

//var_dump(gmp_perfect_square(25));