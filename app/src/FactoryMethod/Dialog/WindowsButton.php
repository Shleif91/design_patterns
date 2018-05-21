<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

class WindowsButton implements Button
{
    public function render(): string
    {
        return 'draw Windows button';
    }

    public function onClick(string $eventText): string
    {
        return $eventText;
    }
}
