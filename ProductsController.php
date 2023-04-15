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
    $sku = isset($_POST['sku']) ? $_POST['sku'] : null;
    if (empty($sku)) {
        echo "Sku field is required";
        return;
    }

    $existing_product = $this->crud->read("SELECT * FROM products WHERE sku='$sku'");
    if ($existing_product) {
        echo "Product with this sku already exists";
        return;
    }

    // pozostałe dane produktu
    $product_data = [
        'sku' => $sku,
        'name' => isset($_POST['name']) ? $_POST['name'] : null,
        'price' => isset($_POST['price']) ? $_POST['price'] : null,
    ];

    // pętla foreach dla pól wymagających walidacji
    $fields = ['size', 'weight', 'height', 'width', 'length'];
    foreach ($fields as $field) {
        if (!empty($_POST[$field])) {
            $product_data[$field] = $_POST[$field];
        } else {
            $product_data[$field] = null;
        }
    }

    $this->crud->create($product_data, 'products');
    echo "Product added successfully";

    header("Location: index.php");
exit;
    }

    public function getProducts()
    {
        $query = 'SELECT * FROM products';

        $results = $this->crud->read($query);

        return $results;
    }

    public function deleteProduct($product_id)
    {
        $this->crud->delete("DELETE FROM products WHERE id = $product_id");
    }
}