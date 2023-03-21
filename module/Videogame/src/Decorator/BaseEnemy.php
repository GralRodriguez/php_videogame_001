<?php

declare(strict_types=1);

namespace Videogame\Decorator;

class BaseEnemy implements Enemy
{

    public function takeDamage(): float
    {
        return 9;
    }
}