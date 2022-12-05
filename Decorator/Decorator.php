<?php


interface HeroInterface
{
    public function getHp();

    public function getArmor();

    public function getUltimate();
}


class Hero implements HeroInterface
{
    /**
     * Хит поинт
     * @var
     */
    public $hp;

    /**
     * Ульта
     * @var
     */
    public $ultimate;

    /**
     * Броня
     * @var
     */
    public $armor;


    public function __construct($hp, $ultimate, $armor)
    {
        $this->hp = $hp;
        $this->ultimate = $ultimate;
        $this->armor = $armor;

    }

    /**
     * Получение хп
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Получение брони
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    public function getUltimate()
    {
        return $this->ultimate;
    }
}

/**
 * Абстрактный класс
 */
class AbstractHeroDecorator
{
    /**
     * @var
     */
    protected $hero;

    /**
     * @param Hero $hero
     * @return void
     */
    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
    }


}

class HeroDefenceDecorator extends AbstractHeroDecorator
{

    /**
     * Возвращение системного пути
     * @return string
     */
    public function getArmor(): string
    {
        return $this->hero->getArmor() + 125;
    }

    public function getHp(): string
    {
        return $this->hero->getHp();
    }

}


class HeroHpDecorator extends AbstractHeroDecorator
{
    public function getHp(): string
    {
        return $this->hero->getHp();
    }
}


function test()
{

    $lifeline = new Hero(100, 'loot', '120');
    $lifeline = new HeroDefenceDecorator($lifeline);
    var_dump($lifeline->getHp());

}

test();