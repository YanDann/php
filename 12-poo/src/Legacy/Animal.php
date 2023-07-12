<?php

namespace App\Legacy;

// Une classe abstraite est non instanciable
abstract class Animal
{
    protected string $name;
    private string $type;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move()
    {
        // self : la classe dans laquelle le code est présent
        // static : la calsse dans laquelle le code est executé
        return $this->name.' se déplace ';//.self::class.', '.static::class;
    }

    abstract public function breathe();
}
