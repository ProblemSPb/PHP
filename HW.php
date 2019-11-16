<?php

$array = array(4, 2, 6, 8, 3, 9, 15);

for ($i=0; $i < count($array); $i++) { 
    echo $array[$i]." ";
}

echo '<br>';

$assoc_array = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4);

foreach($assoc_array as $key => $val){
    echo "$key => $val<br>";
}

// Создать массив: 4,2,6,8,3,9,15.
//Отсортировать массив используя функцию. Добавить в конец массива количество элементов в нем на данный момент.

$array1 = array(4,2,6,8,3,9,15);
sort($array1);

print_r($array1);
echo '<br>';
echo '<br>';

$array1[] = count($array1);

print_r($array1);
echo '<br>';
echo '<br>';

// Создать массив, который содержит: Фамилию, Имя. Отсортировать по алфавиту.
// Вывести как единую строку используя функцию.
// сначала Заглавные, потом маленькие, потом цифры

$names = array('laura Brabigan', 'Laura Brabigan', 'Max Mustermann', 'Elvis Presley', 345);

sort($names);

print_r($names);
echo '<br>';
echo '<br>';

?>