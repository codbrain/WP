<?php

require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
// debug($car1);


$car1->color = 'black';
$car1->brand = 'volvo';
$car1->speed = 431;
$car1->year = 2022;

// debug($car1);

$car2->color = 'red';
$car2->brand = 'BMW';
$car2->speed = 211;
$car2->year = 2021;

//debug($car2);


echo "<h3>My car</h3>
Brand: {$car1->brand}<br>
Color: {$car1->color}<br>
Wheeles:{$car1->wheels}<br>
Year: {$car1->year}<br>
Speed: {$car1->speed}<br>";



?>