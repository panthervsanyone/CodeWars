<?php

/*
 * Simple, remove the spaces from the string, then return the resultant string.
 */

function no_space(string $s): string {
    return implode(explode(' ',$s));
}