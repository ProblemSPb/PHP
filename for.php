<?php

/*
for - цикл со счетчиком
while - цикл с предусловием, выполняется до тех пор, пока условие true
do-while - цикл с постусловием, всегда выполнится хотя бы 1 раз даже при false условии
foreach - цикл перебора массивов
*/

for($i = 1; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}

// пример, когда условие не задано
for($i = 1; ; $i=$i+2) {
    if($i > 10) {
        break; // останавливаем если i>10
    }
    echo $i;
}
echo "<br>";

// пример с циклом без условий
// создаем глобальную переменную
$i = 1;

for(; ;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
echo "<br>";

// continue
for ($j=1; $j < 10; $j++) { 
    if ($j % 2)  // если 0 это false, 1 true
        continue; // все что после continue в случае true НЕ ВЫПОЛНЯЕТСЯ и цикл стартует заново
        echo $j;
}
echo "<br>";
echo "<br>";


// for each

$arr = array("one", "two", "three");

foreach($arr as $value){
    echo "Value: $value<br />\n";
}
echo "<br>";

$array = array(
    "one" => 1,
    "two" => 2,
    "three" => 3
);

foreach($array as $key => $value) {
    echo "$key => $value<br>";
}

?>