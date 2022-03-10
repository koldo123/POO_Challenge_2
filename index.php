<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('red', 5, 'fuel');
// echo $car->forward();
// var_dump($car);
// var_dump(Car::ALLOWED_ENERGIES);

$foodTruck = new Truck('black', 3, 50, 'oil');
echo $foodTruck->forward();
echo $foodTruck->brake();
echo $foodTruck->setCargo(50);
echo $foodTruck->getCargo();
var_dump($foodTruck);

$secondTruck = new Truck('red', 3, 100, 'gazole');
echo $secondTruck->forward();
echo $secondTruck->brake();
echo $secondTruck->setCargo(50);
echo $secondTruck->getCargo();
var_dump($secondTruck);
