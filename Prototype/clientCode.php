<?php
require_once '../vendor/autoload.php';

use patterns\prototype\Hero;

function run()
{

    $firstHero = new Hero();

    $cloneHero = $firstHero->clone();

    var_dump($firstHero);

    var_dump($cloneHero);

}

run();