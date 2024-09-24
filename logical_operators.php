<?php

/*
	Logical operators

  	Logical operators lets us combine mutiple conditional checks in the same "if" statement
  	as an example.

	&& and operator
	|| or operator
	! not operator

*/

$a = 10;
$b = 10;

// if ($a === 10 && $b === 10) {
// 	echo "Both a and b is equal to 10 <br>";
// } else {
// 	echo "Oops, no condition was met <br>";
// }

// if ($a === 10 || $b === 12) {
// 	echo "Either one of the conditions was met<br>";
// } else {
// 	echo "Oops, no condition was met <br>";
// }

if (!($a === 10)) {
	echo "a is not equal to 10 <br>";
} else {
	echo "Oops, no condition was met <br>";
}
