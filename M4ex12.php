<?php
// from Andrew
$total_orders = 6;
$firstname = 'James';
$lastname = 'Dean';
do {
	// OR: $total_orders = ($total_orders == 1) ? '' : 's'; 
	if ($total_orders == 1) {
		$s = '';
	} else {
	    $s = 's';
	}
	echo "$firstname $lastname has $total_orders order$s" . PHP_EOL;
	// OR: $total_orders--
	$total_orders -= 1;
} while ($total_orders > 0);
