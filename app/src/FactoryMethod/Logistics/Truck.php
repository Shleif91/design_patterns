<?php

declare(strict_types=1);

namespace App\FactoryMethod\Logistics;

class Truck implements Transport
{
    public function deliver()
    {
        return 'Truck deliver';
    }
}
