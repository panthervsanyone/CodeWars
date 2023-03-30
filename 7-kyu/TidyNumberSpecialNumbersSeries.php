<?php

function tidyNumber($n):bool {
    $splitDefault = str_split($n);
    $splitForSort = $splitDefault;
    sort($splitForSort);
    $countValue = count($splitDefault);
    for ($i = 0; $i < $countValue; $i++) {
        if ($splitDefault[$i] != $splitForSort[$i]) {
            return false;
        }
    }
    return  true;
}
