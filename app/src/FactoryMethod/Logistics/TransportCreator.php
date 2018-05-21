<?php

declare(strict_types=1);

namespace App\FactoryMethod\Logistics;

abstract class TransportCreator
{
    abstract public function createTransport(): Transport;
}
