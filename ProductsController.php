<?php

include_once 'Crud.php';

class ProductsController
{

    private $crud;

    public function __construct()
    {
        $this->crud = new Crud;
    }

    public function addProduct()
    {
        $product_data = [
            'sku'=$_POST('sku'),
            'name'=$_POST('name'),
            'price'=$_POST('price'),
            'size_mb'=$_POST('size_mb'),
            'weight_kg'=$_POST('weight_kg'),
            'height_cm'=$_POST('height_cm'),
            'width_cm'=$_POST('width_cm'),
            'length_cm'=$_POST('length_cm')
        ];

        $this->crud->create($product_data,'products');
    }
}