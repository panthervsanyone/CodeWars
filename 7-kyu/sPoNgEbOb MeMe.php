<?php

/**
 * You need to create a function that converts the input into this format, with the output being
 * the same string expect there is a pattern of uppercase and lowercase letters.

input:  "stop Making spongebob Memes!"
output: "StOp mAkInG SpOnGeBoB MeMeS!"
 */

function sponge_meme(string $sentence): string {
    $split = str_split($sentence);
    $newSentence = '';
    foreach($split as $key => $value) {
        if ($key % 2 == 0) {
            $newSentence .= strtoupper($value);
        } else $newSentence .= strtolower($value);
    }
    return $newSentence;
}

echo sponge_meme('stop Making spongebob Memes!');