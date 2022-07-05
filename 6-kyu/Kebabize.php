<?php
/*
 * DESCRIPTION:
Modify the kebabize function so that it converts a camel case string into a kebab case.

kebabize('camelsHaveThreeHumps') // camels-have-three-humps
kebabize('camelsHave3Humps') // camels-have-humps
Notes:

the returned string should only contain lowercase letters
 */

function kebabize($string): string
{
    $regex = preg_split('/(?=[A-Z])/', $string);
    $removeNumbers = preg_replace('/[0-9]+/', '', $regex);
    if ($removeNumbers[0] === '') {
        array_shift($removeNumbers);
    }
    return strtolower(implode('-', $removeNumbers));
}