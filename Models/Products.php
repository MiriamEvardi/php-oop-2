<?php

class Product
{
    public $name;
    public $price;
    public $image;
    public $category;


    public function __construct($_name, $_price, $_image, $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        if ($_category === Category::dog || $_category === Category::cat) {
            $this->category = $_category;
        }
    }
}
