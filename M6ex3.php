<?php
$fileName = '/workspace/exercises/shakespeare.txt';
$myArray = file($fileName);
foreach ($myArray as $line) {
	echo "$line[2] <br />";
}
