<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

interface Button
{
    public function render(): string;

    public function onClick(string $eventText): string;
}
