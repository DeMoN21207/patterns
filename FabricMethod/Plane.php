<?php

include_once 'Transport.php';

class Plane implements Transport
{

    public function load(): void
    {
        echo 'The plane is loading...';
    }

    public function deliver(string $cargo): void
    {
        echo 'The plane delivering...';
    }

    public function unload(): void
    {
        echo 'The plane unloaded...';
    }
}