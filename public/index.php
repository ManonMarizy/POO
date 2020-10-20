<?php
require_once __DIR__.'/../src/Bicycle.php';
require_once __DIR__.'/../src/Cars.php';
require_once __DIR__.'/../src/Vehicle.php';


$bike = new Bicycle("red", 1);

$cars = new Cars("red", 4, "diesel");






// Moving bike
echo $bike->start();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Moving cars
echo $cars->start();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed(). ' km/h' . '<br>';
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed(). ' km/h' . '<br>';
echo $cars->brake();


