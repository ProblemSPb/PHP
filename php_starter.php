<?php

// Functions: default values in arguments

$carBrand = "Brand";
$name = "Peter";
getInfo($name, $carBrand);
echo '<br>';

$name = "John";
getInfo($name);

function getInfo($name, $carBrand = "Default"){
    echo 'Это '.$name.' и его любимая машина '.$carBrand;
}
echo '<br>';
echo '<br>'; 

// ...$params

function test(...$params){
    print_r($params);
}

test(1, 2, 3, 4);
echo '<br>';
echo '<br>'; 

// function(array $params);

function test1(array $params){
    print_r($params);
}

test1(array('price'=> 35, 'brand'=> "brand"));
echo '<br>';
echo '<br>'; 

// anonymous function

$colors = array('grey', 'white', 'black', 'red');

array_walk($colors, function($value, $key){
    if($value == 'red'){
        echo 'That is red';
    }
});
echo '<br>';
echo '<br>';

// recursive function (calls itself)

function recursive($n){
    $n++;
    echo '.';
    if ($n>10) {
        return; // exits the function when n>10
    }
    recursive($n); // calls itself
}

recursive(0);

?>