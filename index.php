<?php

require 'Car.php';

$volvo = new Car;


try {
    echo $volvo->start(true) . "\n";
} catch (Exception $e) {
    echo 'Ya un blem : ',  $e->getMessage(), "\n <br>";
    $volvo->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}