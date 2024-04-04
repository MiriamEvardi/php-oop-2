<?php

require_once __DIR__ . "/../Traits/HasWeight.php";
require_once __DIR__ . '/Products.php';

class Game extends Product
{
    use HasWeight;

    public $material;

    public function __construct($_name, $_price, $_image, $_material)
    {
        parent::__construct($_name, $_price, $_image);
        $this->material = $_material;
    }
}
