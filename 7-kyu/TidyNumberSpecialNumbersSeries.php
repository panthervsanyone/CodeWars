<?php

function tidyNumber($n) {
    $split = str_split($n);
    $result = true;
    $limit = count($split)-1;
    for($i = 0; $i <= $limit; $i++) {
        if($split[$i] > $split[$i+1]) {
            $result = false;
            return $result;
        }
    }
    return $result;
}

var_dump(tidyNumber(12));