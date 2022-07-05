<?php

/*
 * Description:
Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

Examples
replace("Hi!") === "H!!"
replace("!Hi! Hi!") === "!H!! H!!"
replace("aeiou") === "!!!!!"
replace("ABCDE") === "!BCD!"
 */

function replace(string $s): string {
    $vowel = ['a','e','i','o','u','A','E','I','O','U'];
    $replace = '!';
    return str_replace($vowel, $replace, $s);
}