<?php

function menFromBoys($arr)
{
    $resultOdd = [];
    $resultEven = [];
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            $resultEven [] = $value;
        } else $resultOdd [] = $value;
    }
    sort($resultEven);
    rsort($resultOdd);
    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 == 0) {
            $result []= $resultEven[$i];
        } else $result[]= $resultOdd[$i];
    }
    return $result;
}

print_r(menFromBoys([7, 3, 14, 17]));