<?php

class Product
{
    public $name;
    public $price;
    public $image;


    public function __construct($_name, $_price, $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
    }
}
