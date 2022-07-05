<?php

/*
 * Task
You'll have to translate a string to Pilot's alphabet (NATO phonetic alphabet).

Input:

If, you can read?

Output:

India Foxtrot , Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta ?

Note:

There are preloaded dictionary you can use, named NATO
The set of used punctuation is ,.!?.
Punctuation should be kept in your return string, but spaces should not.
Xray should not have a dash within.
Every word and punctuation mark should be seperated by a space ' '.
There should be no trailing whitespace
Although the proper alphabet for j is Juliett you have to use Juliet here
 */

function to_nato($words){
    $split = str_split(str_replace(' ','',strtoupper($words)));
    $result = [];
    $alphabetNato = [
        'A' => 'Alfa',
        'B' => 'Bravo',
        'C' => 'Charlie',
        'D' => 'Delta',
        'E' => 'Echo',
        'F' => 'Foxtrot',
        'G' => 'Golf',
        'H' => 'Hotel',
        'I' => 'India',
        'J' => 'Juliet',
        'K' => 'Kilo',
        'L' => 'Lima',
        'M' => 'Mike',
        'N' => 'November',
        'O' => 'Oscar',
        'P' => 'Papa',
        'Q' => 'Quebec',
        'R' => 'Romeo',
        'S' => 'Sierra',
        'T' => 'Tango',
        'U' => 'Uniform',
        'V' => 'Victor',
        'W' => 'Whiskey',
        'X' => 'Xray',
        'Y' => 'Yankee',
        'Z' => 'Zulu'
    ];
    foreach ($split as $value) {
        if (array_key_exists($value, $alphabetNato)){
            $result []= $alphabetNato[$value];
        } else $result []= $value;
    }
    return implode(' ', $result);
}