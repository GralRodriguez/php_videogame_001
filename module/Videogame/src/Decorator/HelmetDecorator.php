<?php

declare(strict_types=1);

namespace Videogame\Decorator;

class HelmetDecorator extends EnemyDecorator
{

    public function takeDamage(): float
    {
        return $this->enemy->takeDamage() / 3;
    }
}