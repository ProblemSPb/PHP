<?php

// strlen - длина строки

$str = "Some text here";
echo strlen($str);

echo "<br>- - - - - - - - - - - - - - - - <br>";

// strpos - возвращает позицию первого вхождения подстроки

$myString = 'abcdef';
$findMe = 'b';

$stringPos = strpos($myString, $findMe);

if ($stringPos === false) {
	echo "Строка '$findMe' не найдена в строке '$myString'.";
} else {
	echo "Строка '$findMe' найдена в строке '$myString' ";
	echo "в позиции $stringPos";
}

echo "<br>- - - - - - - - - - - - - - - - <br>";

// substr - возвращает подстроку

$rest = substr("Test word", -1); // -1 начинаем с последнего символа, тк нулевая позиция - это 									// первый символ, значит -1 будет последний с конца, в нашем 									// случае это 'd'

echo $rest; echo "<br>";

$rest = substr("Test word", -2); // здесь мы начинаем с -rd
echo $rest; echo "<br>";

$rest = substr("Test word", -3, 1); // здесь начали с -o, но выводим только 1 символ!
echo $rest; echo "<br>";

echo "<br>- - - - - - - - - - - - - - - - <br>";

// explode - разбивает строку с помощью разделителя

$pizza = "кусок1 кусок2 кусок3 кусок4 кусок5";

$pieces = explode(" ", $pizza);

echo $pieces[0];
echo "<br>";
echo $pieces[3];

echo "<br>- - - - - - - - - - - - - - - - <br>";

// parse_str - разбирает строку на переменные

$str = "first=value&arr[]=foo+bar&arr[]=baz";

parse_str($str, $output);
echo $output['first']; // value
echo $output['arr'][0]; // foo bar
echo $output['arr'][1]; // baz

echo "<br>";

// другой вариант

$str = "first=value&arr[]=foo+bar&arr[]=baz";

parse_str($str);
echo $first; // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz

echo "<br>";

// another example

$str2 = "second=value2&arr2[]=random+text2&arr2[]=and+another+random+text";

parse_str($str2, $output2);
echo $output2['second']; echo "<br>";
echo $output2['arr2'][0]; echo "<br>";
echo $output2['arr2'][1];



?>