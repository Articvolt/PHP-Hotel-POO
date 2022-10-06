<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel</title>
</head>
<body>
    <h1>POO Hotel</h1>
    <p>A partir de ces captures d'écran, réaliser l'application en POO permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>
    <img src="img/hotel1.png" alt="">
    <img src="img/hotel2.png" alt="">
    <img src="img/hotel3.png" alt="">
    <img src="img/hotel4.png" alt="">
</body>
</html>

<?php

spl_autoload_register(function ($class_name) {  //fonction autoloader en PHP, facilite quand plusieurs classes
    require $class_name . '.php';
});

// HOTEL

$Hilton = new Hotel("Hilton ****","10 route de la gare","67000 Strasbourg");
$Regent = new Hotel("Regent ***", "61 rue Dauphine","75006 Paris");
