<?php
$a = 2;

echo $a++ . PHP_EOL;
echo --$a . PHP_EOL;
echo $a . PHP_EOL;


$a = 4;
$b = 2;
echo ++$a * ($a++ + --$b);

echo "this is the end";
