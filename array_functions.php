<?php

// usort - сортирует массив по значения, используя пользовательскую функцию для сравнения элементов
function compare($a, $b) {
    if($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$new_array = array(3, 5, 2, 6, 1);

usort($new_array, "compare");
print_r($new_array);
echo "<br>";

// is_array - определяет, является ли переменная массивом. Отдает true/false
$yes = array("это", "массив");
$no = 'это строка';

echo is_array($yes) ? "Массив" : "Не массив";
echo "<br>";

echo is_array($no) ? "Массив" : "Не массив";
echo "<br>";

// implode - объединяет элеметы массива в строку
$array_address = array("Имя", "Почта", "Телефон");

echo implode(", ", $array_address);
echo "<br>";

// array_fill - заполняет массив значениями
$a = array_fill(2, 6, "banana"); // начинает со 2 индекса, следующие 6 индексов заполняет словом banana
print_r($a);
echo "<br>";

// array_filter - фильтрует элементы массива с помощью callback-функции
// напишем две функции на определение четных и нечетных чисел
function odd ($var) {
    // является ли нечетным
    return ($var % 2);
}

function even($var) {
    // является ли четным
    return (!($var % 2));
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5 );
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Нечетные:<br>";
print_r(array_filter($array1, "odd"));
echo "<br>";
echo "Четные:<br>";
print_r(array_filter($array2, "even"));
echo "<br>";

// count - считает кол-во элементов массива или что-то в объекте
$array_count[] = 1;
$array_count[] = 2;
$array_count[] = 5;
$array_count[] = 17;

$result_count = count($array_count);
echo $result_count;
echo "<br>";

// sort - сортирует массив
$fruits = array("lemon", "orange", "banana", "apple");
print_r($fruits);
echo "<br>";
sort($fruits);
print_r($fruits);
echo "<br>";

// rsort - сортирует массив в обратном порядке
rsort($fruits);
print_r($fruits);
echo "<br>";



?>