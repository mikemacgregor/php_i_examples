<?php
// sets a cap at 12
$month = 15;

// if cap exceeded, reset to value from 1 to 12
if ($month > 12) $month -= 12;

var_dump($month);

// modulus
$month = 15;
var_dump($month % 12);

// ternary operator
$month = 15;
$month = ($month > 12) ? $month -= 12 : $month;
var_dump($month);

$month = 11;
$month = ($month > 12) ? $month -= 12 : $month;
var_dump($month);

// compressed ternary operator
$value = 'X';
$final = ($value) ?: 'Unassigned';
var_dump($final);

$value = NULL;
$final = ($value) ?: 'Unassigned';
var_dump($final);
