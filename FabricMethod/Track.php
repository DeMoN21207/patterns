<?php
require_once 'Transport.php';

class Track implements Transport
{

    public function load(): void
    {
        echo 'The truck is loading...';
    }

    public function deliver(string $cargo): void
    {
        echo 'The truck delivering...';
    }

    public function unload(): void
    {
        echo 'The truck unloaded...';
    }
}