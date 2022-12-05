<?php
include_once 'Americano.php';
include_once 'Cappuccino.php';
include_once 'Espresso.php';

class CoffeeFactory
{
    public function createCoffee(string $type)
    {
        switch (mb_strtolower($type)) {
            case 'americano':
                return new Americano();
            case 'cappuccino':
                return new Cappuccino();
            case 'espresso';
                return new Espresso();
        }
    }

}