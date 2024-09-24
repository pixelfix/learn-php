<?php

/*
	foreach loop

	A foreach loop is a block of code that
	iterates over every element in an array

*/

// Numerical array
$array = ['apples', 'pears', 'bananas'];

foreach ($array as $key => $value) {
	echo "Key: {$key} <br>";
	echo "Value: {$value} <br>";
	echo "<br>";
}

// Associative array
$array = ['name' => 'Pixelfix', 'age' => 21];

foreach ($array as $key => $value) {
	echo "Key: {$key} <br>";
	echo "Value: {$value} <br>";
	echo "<br>";
}
