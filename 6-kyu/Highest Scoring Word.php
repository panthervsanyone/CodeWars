<?php

function high($x)
{
    $alphabet = [
        1 => "a",
        2 => "b",
        3 => "c",
        4 => "d",
        5 => "e",
        6 => "f",
        7 => "g",
        8 => "h",
        9 => "i",
        10 => "j",
        11 => "k",
        12 => "l",
        13 => "m",
        14 => "n",
        15 => "o",
        16 => "p",
        17 => "q",
        18 => "r",
        19 => "s",
        20 => "t",
        21 => "u",
        22 => "v",
        23 => "w",
        24 => "x",
        25 => "y",
        26 => "z"
    ];
    $arrWords = explode(' ', $x);
    $result = 0;
    $finalRes = [];
    foreach ($arrWords as $value) {
        $split = str_split($value);
        $counter = count($split) - 1;
        for ($i = 0; $i <= $counter; $i++) {
            $result += array_search($split[$i], $alphabet);
            if ($i === $counter) {
                $finalRes [] = $result;
                $result = null;
            }
        }
    }
    asort($finalRes);
    return $arrWords[array_search(max($finalRes),$finalRes)];
}