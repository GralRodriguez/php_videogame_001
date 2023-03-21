<?php

declare(strict_types=1);

namespace Videogame\Decorator;

/**
 * Interface Enemy
 *
 * @package Videogame\Decorator
 */
interface Enemy
{
    /**
     * @return float
     */
    public function takeDamage(): float;

}