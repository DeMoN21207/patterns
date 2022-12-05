<?php

require_once 'Logistic.php';
require_once 'PlaneLogistic.php';
require_once 'RoadLogistic.php';

function clientCode(Logistic $logistic, string $cargo)
{
    $logistic->deliverCargo($cargo);
}


clientCode(new PlaneLogistic(), 'Самолет');