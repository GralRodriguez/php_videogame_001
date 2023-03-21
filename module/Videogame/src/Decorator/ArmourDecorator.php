<?php

namespace Videogame\Decorator;

class ArmourDecorator extends EnemyDecorator
{

    public function takeDamage(): float
    {
        return $this->enemy->takeDamage() / 3;
    }
}