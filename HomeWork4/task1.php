<?php
/*
Задание 1
Придумайте класс, который описывает любую сущность.
 */

abstract class Character
{
    protected string $name;
    protected int $health;
    protected int $mana;
    protected int $strenth;
    protected int $armor;
    protected int $dexterity;

    public function __construct(string $name, int $health, int $mana, int $strenth, int $armor, int $dexterity)
    {
        $this->name = $name;
        $this->health = $health;
        $this->mana = $mana;
        $this->strenth = $strenth;
        $this->armor = $armor;
        $this->dexterity = $dexterity;
    }

    public function attack(Character $character)
    {
        $healthAfterDamage = $character->health - ($this->strenth - ($this->strenth / $character->armor));
        $character->set("health", $healthAfterDamage);
    }

    public function get($element)
    {
        return $this->$element;
    }

    public function set($element, $points)
    {
        return $this->$element = $points;
    }

    public function info()
    {
        return "У персонажа '$this->name' текущее здоровье: $this->health, текущая броня: $this->armor" . PHP_EOL;
    }

}

class Warrior extends Character
{
    public function doubleAttack(Character $character)
    {
        $healthAfterDamage = $character->health - ($this->strenth * 2 - ($this->strenth * 2 / $character->armor));
        $character->set("health", $healthAfterDamage);
    }
}

class Paladin extends Warrior
{
    public function extraArmor(Character $character)
    {
        $armor = $character->armor * 1.3;
        $character->set("armor", $armor);
    }
}
class Archer extends Character
{
}
class Mage extends Character
{
}
class Healer extends Character
{
    private int $healStrenth;

    public function __construct(string $name, int $health, int $mana, int $strenth, int $armor, int $dexterity, int $healStrenth)
    {
        parent::__construct($name, $health, $mana, $strenth, $armor, $dexterity);
        $this->healStrenth = $healStrenth;
    }
    public function heal(Character $character)
    {
        $healthAfterHealing = $character->health + $this->healStrenth;
        $character->set("health", $healthAfterHealing);
        $this->set("mana", $this->mana - 10);
    }
}

$warrior = new Warrior("Воин", 130, 100, 30, 20, 10);
$paladin = new Paladin("Паладин", 150, 100, 20, 30, 10);
$archer = new Archer("Лучник", 100, 100, 10, 10, 30);
$mage = new Mage("Маг", 100, 150, 10, 10, 10);
$healer = new Healer("Лекарь", 130, 130, 10, 10, 10, 20);

$warrior->attack($mage);
echo $mage->info();
$healer->heal($mage);
echo $mage->info();
$paladin->extraArmor($mage);
echo $mage->info();
$warrior->doubleAttack($mage);
echo $mage->info();
