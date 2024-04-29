<?php

class Product
{
    public $idProduct;
    public $name_product;
    public $cost_product;
    public $color_product;
    public $size_product;


    public function __construct($idProduct, $name_product, $cost_product, $color_product, $size_product)
    {
        $this->idProduct = $idProduct;
        $this->name_product = $name_product;
        $this->cost_product = $cost_product;
        $this->color_product = $color_product;
        $this->size_product = $size_product;
    }

    public function getIdProduct()
    {
        return $this->idProduct;
    }

    public function getNameProduct()
    {
        return $this->name_product;
    }

    public function getCostProduct()
    {
        return $this->cost_product;
    }


    public function getColorProduct()
    {
        return $this->color_product;
    }


    public function getSizeProduct()
    {
        return $this->size_product;
    }


}
?>