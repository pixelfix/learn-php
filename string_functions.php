<?php

/*
	string functions

	string functions are built-in php helper function that provides
	excellent support for manipulating a string.
*/

echo strtolower("PHP is Cool!") . "<br>";
echo strtoupper("PHP is cool!") . "<br>";
echo trim("      PHP is cool!         ") . "<br>";
echo strpos("PHP is cool!", " ") . "<br>";
echo substr("PHP is cool!", 0, 3) . "<br>";
echo strrev("PHP is cool!") . "<br>";
echo str_shuffle("PHP is cool!") . "<br>";
echo str_replace(" ", "-", "PHP is cool!") . "<br>";
echo strlen("PHP is cool!") . "<br>";
