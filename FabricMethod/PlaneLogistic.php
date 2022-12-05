<?php
require_once 'Logistic.php';
require_once 'Plane.php';

class PlaneLogistic extends Logistic
{

    public function getTransport(): Transport
    {
        return new Plane();
    }
}