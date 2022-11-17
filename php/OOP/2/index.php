<?php

    require_once 'classes/Car.php';

    function debug($data){
        echo '<pre>' . print_r($data, 1) . '</pre>';
    }

    $car1 = new Car();
    $car2 = new Car();

    debug($car1);

    $car1 ->color = 'Black';
    $car1->brand = 'Volvo';
    $car1->speed = 200;
    $car1->year = 2018;


    $car2 ->color = 'White';
    $car2->brand = 'BMW';
    $car2->speed = 199;
    debug($car1);
    debug($car2);


?>