<?php

$array      = array('2' => 1,3);
$array['b'] = 4;
$array[]    = 2;

var_dump($array);

// OR
$array      = [];		// wipes out the current array values
$array['2'] = 1;
$array[3]   = 3;
$array['b'] = 4;
$array[]    = 2;

var_dump($array);
