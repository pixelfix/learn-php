<?php

/*
  "if" statement / conditional statement

  What is an "if" statement? An "if" is a conditional statement that will execute only
  when the condition is met / true
*/


$a = 11;

if ($a === 10) {
	echo "The condition was true so the code was executed!";
} else if ($a === 11) {
	echo "The primary condition failed, but the secondary condition was met.";
} else {
	echo "The condition was false, so this line was executed";
}
