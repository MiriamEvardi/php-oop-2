<?php

class Food extends Product
{
    public $type;
    public $calories;

    public function __construct($_name, $_price, $_image, $_type, $_calories)
    {
        parent::__construct($_name, $_price, $_image);
        $this->type = $_type;
        $this->calories = $_calories;
    }
}
