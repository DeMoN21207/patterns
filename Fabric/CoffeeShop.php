<?php
include_once 'CoffeeFactory.php';
include_once 'Americano.php';
include_once 'Cappuccino.php';
include_once 'Espresso.php';

class CoffeeShop
{
    public function createFactory(): CoffeeFactory
    {
        return new CoffeeFactory();
    }
}


$shop = new CoffeeShop();
$factory = $shop->createFactory();
$coffee = $factory->createCoffee('Americano');
$coffee->grindCoffee();
