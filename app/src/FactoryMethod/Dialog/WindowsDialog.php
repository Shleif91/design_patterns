<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

class WindowsDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }
}
