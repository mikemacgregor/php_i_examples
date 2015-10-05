<?php

session_start();

$message = 'Not Logged In';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === TRUE) {
	$message = 'Logged In';
}

echo $message;
echo PHP_EOL;

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === TRUE) {
	$message = 'Logged In';
} else {
	$message = 'Not Logged In';
}

echo $message;
echo PHP_EOL;



