<?php

include_once 'Dbconfig.php';
include_once 'Crud.php';


$crud = new Crud();

$data_array = [
    'sku' => 4,
    'name' => 'Pistol',
    'price' => 12,9,
    'size' => 2,
    'weight' => null,
    'dimensions' => null

];

$crud->create($data_array, 'items');