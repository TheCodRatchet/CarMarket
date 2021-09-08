<?php

require_once "Car.php";
require_once "CarListItem.php";
require_once "CarList.php";
require_once "Buyer.php";

$list = new CarList([
    new CarListItem(
        new Car("Audi RS5", "Coupe", "Petrol",
            "Tiptronic Automatic", 2020), 9250000
    ),
    new CarListItem(
        new Car("Audi RS6 Avant", "Station Wagon", "Petrol",
            "Tiptronic Automatic", 2018), 8600000
    ),
    new CarListItem(
        new Car("Audi RS4", "Station Wagon", "Diesel",
            "Manual", 2004), 1587000
    )
]);

$person = new Buyer((int)readline("Enter Your budget:") * 100);

$list->carChoice($list);

$list->purchase($list, $person);