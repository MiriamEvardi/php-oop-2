<?php

class Category
{
    public $type;

    function __construct($_type)
    {
        $this->type = $_type;
    }


    public function getCategoryIcon()
    {
        if ($this->type === 'dog') {
            return '<i class="fas fa-dog"></i>';
        } else {
            return '<i class="fas fa-cat"></i>';
        }
    }
}
