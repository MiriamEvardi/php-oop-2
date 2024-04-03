<?php

class Game extends Product
{
    public $type;

    public function __construct($_name, $_price, $_image, $_type)
    {
        parent::__construct($_name, $_price, $_image);
        $this->type = $_type;
    }
}
