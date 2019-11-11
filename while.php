<?php
/*
for - цикл со счетчиком
while - цикл с предусловием, выполняется до тех пор, пока условие true
do-while - цикл с постусловием, всегда выполнится хотя бы 1 раз даже при false условии
foreach - цикл перебора массивов
*/

// while
$i = 1;

while($i <= 10) {
    echo $i++; // post-increment
}

echo "<br>";

// aanother variant of while
$i = 1;

while($i <= 10):
    echo $i;
    $i++;
endwhile;
echo "<br>";


// do while
$i = 1;
// все равно 1 раз выполнится
do {
    echo $i++;
} while ($i < 0);

?>