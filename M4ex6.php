<?php
$a = 'orange';
switch ($a) {
	case "red":
		echo "The code is EMERG";
		break;
	case "blue":
		echo "The code is WARN";
		break;
	case "orange":
		echo "The code is ALERT";
		break;
	case "yellow":
		echo "The code is INFO";
		break;
}

// same thing but a little more efficient:
switch ($a) {
	case 'red':
		$code = 'EMERG';
		break;
	case 'blue':
		$code = 'WARN';
		break;
	case 'orange':
		$code = 'ALERT';
		break;
	case 'yellow':
		$code = 'INFO';
		break;
	default :
		$code = 'DEBUG';
}
echo 'The code is ' . $code;

// OR!@!!
$codes = ['red' => 'EMERG', 'blue' => 'WARN', 'orange' => 'ALERT', 'yellow' => 'INFO'];
echo 'The code is ' . $codes[$a];
		
