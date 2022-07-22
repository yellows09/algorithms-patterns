<?php

namespace App\Pollution;

class Plains extends Title
{
    private int $wealthfactor = 2;
    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }
}