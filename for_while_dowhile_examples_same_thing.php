<?php
$max = 5;

// for example
for ($i = 1; $i <= $max; $i++) {
	echo $i . ' Hello World' . PHP_EOL;
}

// while example
$i = 1;
while ($i <= 5) {
	echo $i . 'Hello World' . PHP_EOL;
	$i++;
}

// do while example
$i = 1;
do {
	echo $i . 'Hello World' . PHP_EOL;
	$i++;
} while ($i <= 5);