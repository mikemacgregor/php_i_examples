<?php
session_start();
$max  = 7;
$test = (isset($_COOKIE['test'])) ? (int) $_COOKIE['test'] : 0;

// check session validation
if ($test <= $max && $test > 0) {
	$_SESSION['valid'] = TRUE;
} else {
	$_SESSION['valid'] = FALSE;
}

// set or unset cookie
if (!$test && !isset($_SESSION['firstTime'])) {
	setcookie('test', 1, time()+300, '/');
} elseif ($test >= $max) {
	setcookie('test', $max, time()-300, '/');
} elseif ($_SESSION['valid']) {
	setcookie('test', ++$test, time()+300, '/');
}

$_SESSION['firstTime'] = 1;

// display info
phpinfo(INFO_VARIABLES);
$amount = (float) $_GET['amount'];
var_dump($amount);
var_dump($test);
