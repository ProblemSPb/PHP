<?php

// built-in command, number of seconds unixtime
echo time();
echo '<br>';

// built-in, multiple formats available
echo date('H:i:s d.m.Y', time());
echo '<br>';

// built-in
echo mktime(); // current time
echo '<br>';

echo mktime(10, 0,0 , 4, 10, 2018); // format: H, min, sec, date, month, year
echo '<br>';
echo '<br>';


// built-in, time from current time and back to some given time
// например, если нужно собрать данные за прошедшие сутки (другой интервал)
$str_to_time = strtotime('midnight - 1 day');
echo date('H:i d.m.Y', $str_to_time);
echo '<br>';
echo '<br>';


// class DateTime
// помещаем в переменную инстанс класса DateTime
// объектное DateTime медленнее, чем обычное time()
$dateTime = new DateTime();
echo $dateTime->getTimestamp(); // получаем tima stamp в секундах
echo '<br>';

echo date('d.M.Y', $dateTime->getTimestamp()); // задаем формат
echo '<br>';

$dateTime->setDate(2020,7,30); // устанавливаем дату
$dateTime->setTime(9,3,19);     // устанавливаем время

echo date('H:i:s d.m.Y', $dateTime->getTimestamp());

?>