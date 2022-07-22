<?php

namespace App\Pollution;

class DiamondPlains extends TitleDecorator
{

    public function getWealthFactor(): int
    {
        return $this->title->getWealthFactor() + 2;
    }
}