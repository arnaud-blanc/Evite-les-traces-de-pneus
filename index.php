<?php

require_once "Vehicle.php";
require_once "Car.php";

$car = new Car("deep purple", 4, "fuel");

try {
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage() . ' => I release the parking brake. ' . PHP_EOL;;
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut" . PHP_EOL;
}