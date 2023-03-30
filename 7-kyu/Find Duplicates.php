<?php

function duplicates($arr): array {
    return array_values(array_unique(array_filter($arr, function($value, $key) use ($arr) {
        return $key != array_search($value, $arr, TRUE);
    }, ARRAY_FILTER_USE_BOTH)));
}
