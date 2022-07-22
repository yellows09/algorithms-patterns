<?php

namespace App;

abstract class CompositeUnit extends Unit
{
    public function getComposite(): ?CompositeUnit
    {
        return $this;
    }

    public function getUnits()
    {
        return $this->units;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $key = array_search($unit, $this->units, true);
        print_r($key);
        if ($key !== false) {
            unset($this->units[$key]);
        } else {
            return;
        }
    }
}