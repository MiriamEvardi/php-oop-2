<?php

class Product
{
    public $name;
    public $price;
    public $image;
    public $category;


    public function __construct($_name, $_price, $_image)
    {
        $this->name = $_name;

        if (is_numeric($_price)) {

            $this->price = $_price;
        } else {
            throw new Exception("Il prezzo deve essere un valore numerico.");
        }
        $this->image = $_image;
    }
}
