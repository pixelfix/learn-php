<?php

/*
	functions

	A function is a piece of reusable code that normally takes an input,
	does some processing on it and returns a value.
*/

function sum($a, $b)
{
	$c = $a + $b;

	return $c;
}

$a = 10;
$b =  5;

$c = sum($a, $b);

echo "The sum of {$a} + {$b} = {$c} <br>";
