<?php

class Product
{
    public $name;
    public $price;
    public $image;
    public $category;
    public $type;


    public function __construct($_name, $_price, $_image, $_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->type = $_type;
    }

    public function getProductType()
    {
        return $this->type;
    }
}
