<?php
echo "TEST\n";
ECHO "TEST\n";

function myTest()
{
	return 'My Test' . PHP_EOL;
}

// this generates an error: cannot re-declare functions
/*
function MYTEST()
{
	return 'My Test' . PHP_EOL;
}
*/

// can only return ONE value
function sumOfTwo($a, $b = 0)
{
   $c = $a + $b;	
   
   // this is not allowed!
   // return $c, $a, $b;
   
   // this is ok
   return $c;
}
   
echo sumOfTwo(1, 2);
echo PHP_EOL;
echo sumOfTwo(1);
echo PHP_EOL;


// anonymous functions (also called LAMBDA or Closure) are also supported
$function = function ($a, $b = 0) { return $a + $b; };
echo $function(1);



