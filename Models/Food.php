<?php

require_once __DIR__ . "/../Traits/HasWeight.php";
require_once __DIR__ . '/Products.php';


class Food extends Product
{
    use HasWeight;

    public $protein;
    public $calories;

    public function __construct($_name, $_price, $_image, $_protein, $_calories)
    {
        parent::__construct($_name, $_price, $_image);
        $this->protein = $_protein;
        $this->calories = $_calories;
    }
}
