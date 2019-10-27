<?php

/*
ОТРИЦАНИЕ !$a
И $a && $b
ИЛИ $a || $b

приоритеты операторов:
- сначала !
- потом &&
- потом ||

Ternary operator
*/

$a = 10;
$b = 20;

// ! NOT
if (!($a > $b) && ($a > 7)) {
	echo "OK 3";
}
echo "<br>";

// AND &&
if (($a <= $b) && ($a > 7)) {
	echo "OK";
}
echo "<br>";

// OR ||
if (($a > $b) || ($a > 7)) {
	echo "OK again";
}
echo "<br>";

// TERNARY
// если условие выполняется, то выполнится код после "?", если нет, то код после ":"

$word = "Hello";

if ($word == "Hello") {
	echo "1";
}
else {
	echo "2";
}
echo "<br>";

echo $word == "Hello" ? "1" : "2";

?>