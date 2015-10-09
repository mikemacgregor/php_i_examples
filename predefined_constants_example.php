<?php
$eol = PHP_EOL;
for ($x = 0; $x < strlen($eol); $x++) {
	echo ord(substr($eol, $x, 1));
}
echo PHP_EOL;
var_dump(DIRECTORY_SEPARATOR);
var_dump(PATH_SEPARATOR);
