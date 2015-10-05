<?php
$cards = array(
	'red' => array(1, 2, 3, 4),                    
	'blue' => array(1, 2, 3, 4),                    
	'green' => array(1, 2, 3, 4),                    
	'yellow' => array(1, 2, 3, 4)
);

var_dump($cards);

// OR
$cards = array(
	'red' => range(1, 4),
	'blue' => range(1, 4),                    
	'green' => range(1, 4),
	'yellow' => range(1, 4),
);

var_dump($cards);
