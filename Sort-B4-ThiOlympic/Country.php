<?php

class Country
{
    public $name;
    public $totalGoldMedals;

    public function __construct($name, $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTotalGoldMedals()
    {
        return $this->totalGoldMedals;
    }

}