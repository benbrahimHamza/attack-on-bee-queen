<?php

namespace App\Entity;

interface AttackableObjectInterface
{
    public function takeDamage(): void;
    public function getBeeId(): int;
}