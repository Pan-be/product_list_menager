<?php

include_once 'Dbconfig.php';
include_once 'Crud.php';


$crud = new Crud();

    $data_array = [
        'sku' => 'DVD001',
'name' => 'Film DVD',
'price' => 19.99,
'size_mb' => 4500
    ];
    

$crud->create($data_array, 'products');

// $result = $crud->read('SELECT * FROM items');

// $crud->update("UPDATE items SET name = 'sword' WHERE it_id = 1");

// var_dump($result);

// $crud->delete('DELETE FROM items WHERE it_id=3');