<?php

declare(strict_types=1);

namespace App\FactoryMethod\Logistics;

class TruckCreator extends TransportCreator
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
