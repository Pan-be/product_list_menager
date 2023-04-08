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
            'sku'=>$_POST['sku'],
            'name'=>$_POST['name'],
            'price'=>$_POST['price']
        ];

        // pętla foreach dla pól wymagających walidacji
        $fields = ['size_mb', 'weight_kg', 'height_cm', 'width_cm', 'length_cm'];
        foreach ($fields as $field) {
            if (!empty($_POST[$field])) {
                $product_data[$field] = $_POST[$field];
            } else {
                $product_data[$field] = null;
            }
        }

        $this->crud->create($product_data,'products');
    }
}