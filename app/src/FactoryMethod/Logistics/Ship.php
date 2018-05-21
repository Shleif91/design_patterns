<?php

declare(strict_types=1);

namespace App\FactoryMethod\Logistics;

class Ship implements Transport
{
    public function deliver(): string
    {
        return 'Ship deliver';
    }
}
