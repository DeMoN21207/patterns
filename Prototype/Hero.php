<?php

namespace patterns\prototype;

class Hero implements CloneInterface
{

    private $hp = 100;

    private $damage = 12;

    private $armor = 125;

    private $name = 'Default Hero';


    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getArmor(): int
    {
        return $this->armor;
    }


    public function getName(): string
    {
        return $this->name;
    }


    /** copy class */
    public function clone(): Hero
    {
        $clone = clone $this;
        $clone->setName('Hero Clone');
        return $clone;
    }
}