<?php
$a = '12345';
$b = 12345;

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);

// PLEASE don't rely on this!!!
var_dump($a <> $b);

// string comparisons
$c = 'Test';
$d = 'test';

var_dump($c <  $d);
var_dump($c == $d);
var_dump($c >  $d);

// combinations

var_dump(($a == $b) && ($c < $d));	// true
var_dump(($a == $b) || ($c == $d)); 

// DO NOT mix letter logicals and symbolic logicals!!!
var_dump(($a == $b) and ($c < $d) or ($a == $b) && ($c == $d));

