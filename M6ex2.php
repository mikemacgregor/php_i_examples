<?php
$url = 'http://www.google.com/';
$contents = file_get_contents($url);
echo preg_replace(['/Google/','/Lucky/'], ['Boogle','Silly'], $contents);