<?php

/*
	switch

	A switch statement is a block of code similar to an if/else statement
	that executes code based on certain conditions
*/

// $status = "DRAFT";
$status = "ACTIVE";

switch ($status) {
	case "DRAFT":
		echo "This status is {$status} <br>";
		break;
	case "ACTIVE":
		echo "The status is {$status} <br>";
		break;
	default:
		echo "The status is unknown <br>";
		break;
}
