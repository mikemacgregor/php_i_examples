<?php

// tic-tac-toe

$ticTacToe = array(
	array('', '', ''),
	array('', '', ''),
    array('', '', '')
);

var_dump($ticTacToe);

$ticTacToe[0][0] = 'X';
$ticTacToe[2][2] = 'O';

var_dump($ticTacToe);
