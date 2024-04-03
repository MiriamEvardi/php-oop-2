<?php

class Game extends Product
{
    public $material;

    public function __construct($_name, $_price, $_image, $_material)
    {
        parent::__construct($_name, $_price, $_image);
        $this->material = $_material;
    }
}
