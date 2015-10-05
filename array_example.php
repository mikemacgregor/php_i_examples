<?php

// used for updates or one-off assignments
$profile['firstName'] = 'Doug';
$profile['lastName']  = 'Bierer';
$profile['email']     = 'doug@unlikelysource.com';

var_dump($profile);

// used for initial assignments
$profile = ['firstName' => 'Doug', 
            'lastName'  => 'Bierer',
            'email'     => 'doug@unlikelysource.com'];

var_dump($profile);

// automatic assignment
$profile   = [];
$profile[] = 'Doug';
$profile[] = 'Bierer';
$profile[] = 'doug@unlikelysource.com';

var_dump($profile);


