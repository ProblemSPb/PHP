<?php

$str = "Hello Friend!";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

// print_r() - выводит информацию о переменной в удобочитаемом виде.

print_r($arr1); // вывести массив на экран
echo "<br>".$arr1[0];
echo "<br>";

print_r($arr2);
echo "<br>";

// return true
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results теперь содержит вывод print_r
echo $results;

echo "<br> - - - - - - - - - - - - - - - - - - <br>";

// stripos - возвращает позицию при поиске символа/ов без учета регистра

$findMe = 'a';
$myString1 = 'xyz';
$myString2 = 'ABC';

$position1 = stripos($myString1, $findMe);
$position2 = stripos($myString2, $findMe);

if ($position1 === false) {
	echo "Строка '$findMe' не найдена в строке '$myString1'";
}

echo "<br>";

if ($position2 !== false) {
	echo "Строка '$findMe' найдена в строке '$myString2' в позиции $position2";

}

echo "<br> - - - - - - - - - - - - - - - - - - <br>";

// strrev - переворачивает строку

echo strrev("Hello world!");

echo "<br> - - - - - - - - - - - - - - - - - - <br>";

// substr_replace - замена части строки

$var = 'ABCDEFGH:/MNOPQR/';
echo "Оригинал: $var<hr />\n";

// два следующих примера заменят всю строку на bob
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

// вставляет bob в начало
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

// следующие строки заменяют MNOPQR на bob
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

// удаляет MNOPQR 
echo substr_replace($var, '', -7, -1) . "<br />\n";

echo "<br> - - - - - - - - - - - - - - - - - - <br>";


// trim - удаляет пробелы и другие символы в начале и конце строки

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello = "Hello World";

var_dump($text, $binary, $hello);

echo "<br>";

$trimmed = trim($text);
var_dump($trimmed);
echo "<br>";

$trimmed = trim($text, " \t.");
var_dump($trimmed);
echo "<br>";

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);
echo "<br>";

$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>