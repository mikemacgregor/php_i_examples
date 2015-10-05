<?php

$statusOptions = ['open','closed','cancelled','held'];
$statusOptions[] = 'invoiced';
$statusOptions[1] = 'complete';
echo $statusOptions[4];

var_dump($statusOptions);

$row = array('amount' => 20, 'lastname' => 'Smith');
$row['formatted_date'] = date('M d, Y');
echo $row['lastname'];

var_dump($row);
