<?php
/*
 * Description:
Remove all exclamation marks from the end of sentence.

Examples
remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi! Hi"
remove("Hi") === "Hi"

 */

function remove(string $s): string {
    $arr = str_split(strrev($s));
    foreach ($arr as $val){
        if ($val == '!'){
            array_shift($arr);
        } else break;
    } return strrev(implode('',$arr));
}