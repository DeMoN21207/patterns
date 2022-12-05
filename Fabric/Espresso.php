<?php

include_once 'Coffee.php';

class Espresso implements Coffee
{
    public $a =1;

    public function grindCoffee()
    {
        echo 'Перемешали еспрессо';
    }

    public function makeCoffee()
    {
        // TODO: Implement makeCoffee() method.
    }

    public function pourIntoCup()
    {
        // TODO: Implement pourIntoCup() method.
    }
}


