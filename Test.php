<?php

include_once 'Dbconfig.php';
include_once 'Crud.php';


$crud = new Crud();

$data_array = [
    'name' => 'Glasses',
    'price' => 29.9,
    'size' => 4

];

// $crud->create($data_array, 'items');

// $result = $crud->read('SELECT * FROM items');

// $crud->update("UPDATE items SET name = 'sword' WHERE it_id = 1");

// var_dump($result);

$crud->delete('DELETE FROM items WHERE it_id=3');