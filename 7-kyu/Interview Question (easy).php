<?php


function get_strings($city): string {
    $split = array_count_values(str_split(strtolower($city)));
    $result = [];
    foreach($split as $key => $value) {
        if($key == ' ') {
            continue;
        }
        $result []= $key . ':' . str_repeat('*', $value);
    }
    return implode(',', $result);
}

