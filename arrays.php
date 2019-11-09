<?php

// arrays

$arr = array("qwe1", "qwe2", "qwe3", "qwe4");

var_dump($arr);
echo "<br>";

$array2 = ["qwe1", "qwe2", "qwe3", "qwe4"];
print_r($array2);
echo "<br>";

// dynamic array
$array_dynamic[] = "element1";
$array_dynamic[] = "element2";
$array_dynamic[] = "element3";

print_r($array_dynamic);
echo "<br>";


// Associative arrays are arrays that use named keys that you assign to them.
$my_array = array("foo" => "bar", "2nd element" => "2 element value");

print_r($my_array);
echo "<br>";

// multidimentinal array
// example of a multidimentional associative array
// массив $A хранит в себе другие массивы

$A["Иванов"] = array("name" => "Иванов И.И.", "age" => "25", "email" => "ivanov@mail.ru");
$A["Петров"] = array("name" => "Петров А.А.", "age" => "35", "email" => "petrov@mail.ru");

print_r($A);
echo "<br>";

echo "Возраст Петрова - ".$A["Петров"]["age"]." лет.";
echo "<br>";


// example of a multidimentional array
// массив хранит в себе еще три массива

$array_multi = array(array('Иванов', 'Слесарь', 2500),
				array('Петров', 'Строитель', 2700),
				array('Сидоров', 'Водитель', 2000));

echo "Сотрудник: ".$array_multi[0][0]." в должности ".$array_multi[0][1]." с зарплатой ".$array_multi[0][2].".";
echo "<br>";


?>