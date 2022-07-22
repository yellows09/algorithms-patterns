<?php

namespace App;
//include_once '../vendor/autoload.php';

class Army extends CompositeUnit
{
    protected array $units = [];

    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}
