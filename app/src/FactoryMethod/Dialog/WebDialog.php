<?php

declare(strict_types=1);

namespace App\FactoryMethod\Dialog;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new HtmlButton();
    }
}
