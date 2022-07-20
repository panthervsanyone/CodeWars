<?php

/*
 * Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

For example: month 2 (February), is part of the first quarter; month 6 (June), is part of
the second quarter; and month 11 (November), is part of the fourth quarter.
 */

function quarterOf($month) {
    switch($month) {
        case $month < 4:
            return 1;
            break;
        case $month < 7:
            return 2;
            break;
        case $month < 10:
            return 3;
            break;
        case $month <= 12:
            return 4;
            break;
    }
}