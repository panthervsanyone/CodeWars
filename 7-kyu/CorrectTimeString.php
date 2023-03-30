<?php

function timeCorrect($timeString) {
    if (empty($timeString)) {
        return $timeString;
    }

    $timeParts = preg_split('/[:]/', $timeString);
    if (count($timeParts) != 3) {
        return null;
    }

    if (!is_numeric($timeParts[0]) || !is_numeric($timeParts[1]) || !is_numeric($timeParts[2])) {
        return null;
    }

    $hours = intval($timeParts[0]);
    $minutes = intval($timeParts[1]);
    $seconds = intval($timeParts[2]);


    if ($seconds >= 60) {
        $minutes += floor($seconds / 60);
        $seconds = $seconds % 60;
    }

    if ($minutes >= 60) {
        $hours += floor($minutes / 60);
        $minutes = $minutes % 60;
    }

    $hours = $hours % 24;

    return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}

timeCorrect("11:70:10");