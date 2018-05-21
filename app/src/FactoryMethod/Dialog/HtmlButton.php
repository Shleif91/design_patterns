<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

class HtmlButton implements Button
{
    public function render(): string
    {
        return 'code for HTML button';
    }

    public function onClick(string $eventText): string
    {
        return $eventText;
    }
}
