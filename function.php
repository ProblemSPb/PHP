<?php

# Functions

$global = 'Global var';

echo $global;
echo "<br> ___________ <br><br>";

// function that prints text

function print_text(){
	echo "Hey there! Functions!";
}

print_text();

echo "<br> ___________ <br><br>";

// function that prints global var + text

function show($text){
	global $global;

	echo $text;
	echo "<br>";
	echo $global;
}

show("2nd function");

echo "<br> ___________ <br><br>";

// introducing local vars in functions

function sum($a, $b){
	$result = $a + $b; // local
	return $result;
}

echo sum(3, 4);

?>