<?php
/*
 * DESCRIPTION:
Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

The output should be two capital letters with a dot separating them.

It should look like this:

Sam Harris => S.H

patrick feeney => P.F

 */

function abbrevName($name)
{
    $name = explode(' ', strtoupper($name));
    $first_char = [];
    for ($i = 0; $i < count($name); $i++) {
        $first_char []= substr($name[$i], 0, 1);
    }
    return implode('.', $first_char);
}