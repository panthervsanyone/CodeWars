<?php

function getOrder($input): string {
    $menu = [
        1 => 'Burger',
        2 => 'Fries',
        3 => 'Chicken',
        4 => 'Pizza',
        5 => 'Sandwich',
        6 => 'Onionrings',
        7 => 'Milkshake',
        8 => 'Coke'
    ];
    $result = '';
    foreach ($menu as $value) {
        $stringLower = strtolower($value);
        if (preg_match("($stringLower)", $input)) {
            $repeatCounter = substr_count($input, $stringLower);
            $result .= str_repeat($value, $repeatCounter);
        }
    }
    $regexResult = preg_split('/(?=[A-Z])/', $result);
    array_shift($regexResult);
    return implode(' ',$regexResult);
}