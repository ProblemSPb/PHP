<?php

$arr = array(1, 2, 3, 4);

print_r($arr);
echo "<br>";
echo "<br>";

echo count($arr);
echo "<br>";


foreach($arr as &$value) { // & ссылка на переменную, чтобы изменять значения
    $value = $value * 2;
}

print_r($arr);
echo "<br>";

var_dump($arr); // & сохраняется в последнем элементе массива! 
echo "<br>";
echo "<br>";

// чтобы его убрать, нужно =>
unset($value);

var_dump($arr); 
echo "<br>";
echo "<br>";


// цикл в цикле

$two_d_array = array(array('Вася', 'Слесарь', 2500),
            array('Петя', 'Строитель', 2500),
            array('Игорь', 'Водитель', 2500));


for($i = 0; $i <3; $i++) {
    for($j = 0; $j < 3; $j++) {
        echo ' | '.$two_d_array[$i][$j];
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";


?>