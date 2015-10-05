<?php
// will be Mon, Tue, Wed, etc.
$day = date('D');

if ($day == 'Mon') {
	echo 'I hate Mondays!!!';
} elseif ($day == 'Fri') {
	echo 'It\'s almost the weekend!!!';
} elseif ($day == 'Sat') {
	echo 'Let\'s go to a movie';
} else {
	echo 'Good luck!!!';
}


