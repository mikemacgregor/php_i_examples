<?php

// *any* executable code is run at this point
include 'this_file_needs_to_be_included.php';

// function in include file is not automatically called
// we need to call it here
echo PHP_EOL;
echo test(__FILE__);

// this will work ok
include_once 'this_file_needs_to_be_included.php';

// this will generate an error
//include 'this_file_needs_to_be_included.php';
