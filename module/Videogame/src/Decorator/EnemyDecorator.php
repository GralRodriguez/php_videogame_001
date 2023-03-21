<?php

namespace Videogame\Decorator;

abstract class EnemyDecorator implements Enemy
{

    protected Enemy $enemy;

    public function __construct(Enemy $enemy)
    {
        $this->enemy = $enemy;
    }

}