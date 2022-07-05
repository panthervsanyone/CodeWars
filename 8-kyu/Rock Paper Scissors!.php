<?php

/*
 * Rock Paper Scissors
Let's play! You have to return which player won! In case of a draw return Draw!.

Examples(Input1, Input2 --> Output):

"scissors", "paper" --> "Player 1 won!"
"scissors", "rock" --> "Player 2 won!"
"paper", "paper" --> "Draw!"
 */

function rpc ($p1, $p2) {
    $first = str_split($p1);
    $second = str_split($p2);
    if($first[0] == "s" && $second[0] == "p" || $first[0] == 'p' && $second[0] == 'r' || $first[0] == 'r' && $second[0] == 's') {
        return "Player 1 won!";
    } elseif ($first[0] == $second[0]) {
        return "Draw!";
    } else return "Player 2 won!";
}