<?php

class Car {
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed = 0;

    // функция == метод внутри класса
    public function move($speed) {
        $this->currentSpeed = $speed; // this - псевдо переменная, которая помогает обращаться внутри класса
    }
}

?>