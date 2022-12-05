<?php
include_once 'Track.php';
include_once 'Logistic.php';


class RoadLogistic extends Logistic
{

    public function getTransport(): Transport
    {
        return new Track();
    }
}