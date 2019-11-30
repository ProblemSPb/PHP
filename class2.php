<?php

include 'class.php'; // подключает файл во время выполнения кода

$car = new Car;

$car->brand = 'BMW';
$car->color = 'red';
$car->maxSpeed = 120;

print_r($car);
echo '<br>';

$car->move(90); // обращаемся к функции внутри класса
print_r($car);


?>