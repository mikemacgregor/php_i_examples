<?php

$myArray = array('Progamming','in','PHP','is','fun!');
echo $myArray[2];

// OR (PHP 5.4 or above!)
echo array('Progamming','in','PHP','is','fun!')[2];

// OR
$myArray = str_word_count('Progamming in PHP is fun!', 1);
echo $myArray[2];
