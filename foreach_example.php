<?php
$colorList = ['Red','Green','Yellow','Blue','Orange','Indigo','Violet'];

foreach ($colorList as $color) {
	echo "$color\n";
}

foreach ($colorList as $number => $color) {
	echo "$number: $color\n";
}