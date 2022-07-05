<?php

/*
 * Description:

We want to generate a function that computes the series starting from 0 and ending until the given number.

Example:
Input:

> 6
 */

class SequenceSum {
    public function showSequence($count)
    {
        $str = [];
        if ($count > 0) {
            $arr = range(0, $count);
            $sum = array_sum($arr);
            foreach ($arr as $val){
                $str []= $val;
            }
            $strSum = implode('+', $str);
            $strSum .= ' = '.$sum;
            return $strSum;
        } elseif ($count < 0) {
            return "$count<0";
        } return '0=0';
    }
}