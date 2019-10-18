<?php

// str_repeat - выводит строку несколько раз

$string_repeat = str_repeat("This text is to be repeated 10 times.<br>", 10);
echo $string_repeat;

echo "<br> - - - - - - - - - - - - <br>";

// substr_count - возвращает число вхождение подстроки

$text = "This is our text";

echo substr_count($text, 'is'); // 2 раза is в строке
echo "<br>";

echo substr_count($text, 'is', 3); // начинаем искать is с 3-го символа => 1 
echo "<br>";

echo substr_count($text, 'is', 3, 3); // начинаем с 3-го символа и ищем в следующих 3-х => 0

echo "<br> - - - - - - - - - - - - <br>";

// str_replace - находит строку/символы и заменяет их

echo $replacing = str_replace("%white%", "black", "white will be replaced with black ='%white%'");
echo "<br>";

// another example
$only_consonants = "Hello world of PHP";
echo $only_consonants; echo "<br>";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

echo $only_consonants = str_replace($vowels, "", $only_consonants);
echo "<br>";

// another example
$phrase = "You should eat pizza, burgers and ice cream every day";
$healthy = array("fruits", "vegies", "fiber");
$junk_food = array("pizza", "burgers", "ice cream");

echo $new_phrase = str_replace($junk_food, $healthy, $phrase);
echo "<br>";

// another example
$str = str_replace("ll", "", "Good golly miss molly", $count); // добавляем в конце переменную, которая 														// будет хранить результат количества изменений
echo $count;

?>