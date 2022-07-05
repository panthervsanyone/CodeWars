<?php

/*
 *
 * DESCRIPTION:
Create a combat function that takes the player's current health and the amount of damage recieved,
and returns the player's new health. Health can't be less than 0.


 */

function combat($health, $damage) {
    $res = $health - $damage;
    return $res < 0 ? 0 : $res;
}