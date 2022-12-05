<?php

/**
 * Паттерн Singletone
 */
final class Singleton
{

    private static $instance;

    private static $test;

    /**
     * Создание состояния класса
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (empty($instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Запрещаем переопределять конструктор
     */
    private function __construct()
    {

    }

    /**
     * Запрещаем копировать класс
     * @return void
     */
    private function __clone()
    {

    }

    public static function test($a)
    {
        self::$test = $a;
    }
}

$a = Singleton::getInstance();
var_dump($a);
Singleton::test('test');
$b = Singleton::getInstance();
var_dump($b);
