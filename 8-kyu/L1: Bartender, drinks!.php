<?php

/*
 * DESCRIPTION:
Complete the function that receives as input a string, and produces outputs according to the following table:

Input	Output
"Jabroni"	"Patron Tequila"
"School Counselor"	"Anything with Alcohol"
"Programmer"	"Hipster Craft Beer"
"Bike Gang Member"	"Moonshine"
"Politician"	"Your tax dollars"
"Rapper"	"Cristal"
anything else	"Beer"
Note: anything else is the default case: if the input to the function is not any of
the values in the table, then the return value should be "Beer".

Make sure you cover the cases where certain words do not show up with correct capitalization.
For example, the input "pOLitiCIaN" should still return "Your tax dollars".
 */

function get_drink_by_profession(string $s): string {
    $lower = strtolower($s);
    switch($s){
        case $lower == "jabroni":
            return "Patron Tequila";
            break;
        case $lower == "school counselor":
            return "Anything with Alcohol";
            break;
        case $lower == "programmer":
            return "Hipster Craft Beer";
            break;
        case $lower == "bike gang member";
            return "Moonshine";
            break;
        case $lower == "politician":
            return "Your tax dollars";
            break;
        case $lower == "rapper";
            return "Cristal";
            break;
        default:
            return "Beer";
    }
}