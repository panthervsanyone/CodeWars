<?php

/*
 * Calculate the product of all elements in an array.

If the array is NULL or empty, return NULL.
 */

function product($a)
{
    if (empty($a) || is_null($a)) {
        return null;
    } else return array_product($a);
}
