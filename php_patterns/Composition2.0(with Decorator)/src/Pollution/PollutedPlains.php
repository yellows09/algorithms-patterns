<?php

namespace App\Pollution;

class PollutedPlains extends TitleDecorator
{
    public function getWealthFactor(): int
    {
        return $this->title->getWealthFactor() - 4;
    }
}