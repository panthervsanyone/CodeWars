<?php

/*
 * DESCRIPTION:
Write a function that returns the total surface area and volume of a box as an array: [area, volume]
 */

function getSize($width, $height, $depth) {
    $area = 2*($width * $height + $depth * $width + $depth * $height);
    $volume = $width * $height * $depth;
    return [$area, $volume];
}