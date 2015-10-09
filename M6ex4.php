<?php
$dir = '../OrderApp/';
// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo 'name: ' . $file . ' :: type: ' . filetype($dir . $file);
            if(filetype($dir . $file) == 'file') {
                $array = file($dir . $file);
                echo ' :: size: ' . filesize($dir . $file);
                echo ' :: lines: ' . count($array);
            }
            echo PHP_EOL;
        }
        closedir($dh);
    }
}

// alternative
$objects = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($dir), 
		RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
    echo 'name: ' . $name . ' :: type: ' . $object->getType();
    echo ' :: size: ' . $object->getSize();
    echo ' :: lines: ' . getNumLines($dir . $name);
    echo PHP_EOL;
}

function getNumLines($fn)
{
	return count(file($fn));
}
