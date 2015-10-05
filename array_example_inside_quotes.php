<?php

// used for updates or one-off assignments
$profile['firstName'] = 'Doug';
$profile['lastName']  = 'Bierer';
$profile['email']     = 'doug@unlikelysource.com';

// use {} to identify a variable you want interpolated
echo "Name:\n First: {$profile['firstName']} \nLast: {$profile['lastName']}\n";
