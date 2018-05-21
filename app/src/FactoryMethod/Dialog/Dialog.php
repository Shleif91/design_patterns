<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

abstract class Dialog
{
    public function renderWindow(): string
    {
        $button = $this->createButton();
        $button->onClick('close dialog');
        $msg = $button->render();

        return $msg . "\nRender window";
    }

    abstract public function createButton(): Button;
}
