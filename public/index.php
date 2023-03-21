<?php

require __DIR__ . '/../vendor/autoload.php';

use Videogame\Decorator\ArmourDecorator;
use Videogame\Decorator\BaseEnemy;
use Videogame\Decorator\HelmetDecorator;

$damageReceived = 0;
$enemy = new BaseEnemy();
$damageReceived = $enemy->takeDamage();
print_r("\nDamage received: " . $damageReceived);

$enemyWithHelmet = new HelmetDecorator($enemy);
$damageReceived = $enemyWithHelmet->takeDamage();
print_r("\nDamage received: " . $damageReceived);

$enemyWithHelmetAndArmour = new ArmourDecorator($enemyWithHelmet);
$damageReceived = $enemyWithHelmetAndArmour->takeDamage();
print_r("\nDamage received: " . $damageReceived);

print_r("\n");