<?php
$a = 1;
$b = 1;

function test(&$x, &$y)
{
	$y++;
	$x *= 2;
	return TRUE;
}

function test2($x, $y)
{
	$y++;
	$x *= 2;
	return TRUE;
}

// affects $a and $b because values are by reference
test($a, $b);
test($a, $b);

// NOTE: has no effect on $a and $b outside test2()
test2($a, $b);
test2($a, $b);

// output: 4, 3
var_dump($a, $b);